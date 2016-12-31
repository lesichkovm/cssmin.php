# cssmin.php

Minifies and combines CSS files into a single HTTP request to reduce overhead and round trips

## Usage

Change your CSS include scripts from:

```html
<link rel="stylesheet" href="/shared/css/css1.css" />
<link rel="stylesheet" href="/shared/css/css2.css" />
<link rel="stylesheet" href="/shared/css/css3.css" />
```

to a single include script

```html
<link rel="stylesheet" href="/cssmin/shared/css/css1.css/shared/css/css2.css/shared/css/css3.css" />
```

## Note
Doesn't play well relative links - loading fonts, etc
