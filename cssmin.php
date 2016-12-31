<?php

$path = isset($_REQUEST['path']) ? $_REQUEST['path'] : '';
$cssPaths = explode(".css", $path);

header('Content-type: text/css');
foreach ($cssPaths as $cssPath) {
    $css = file_get_contents(__DIR__ . '/' . $cssPath . '.css');
    echo(compress($css));
}

function compress($css) {
    /* remove comments */
    $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
    /* remove tabs, spaces, newlines, etc. */
    $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);
    return $css;
}
