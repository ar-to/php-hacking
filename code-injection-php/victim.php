<h1>PHP Code Injection</h1>
<p>Include a file via a url parameter. This requires you to enable allow_url_include inside php.ini. Keep it off unless you know what you are doing.</p>

<p>Pass to input: http://localhost:8888/code-injection-php/php-code-injection-attacker.php</p>
<form method="get" action="" autocomplete="off">
  <input type="text" name="page"/>
  <input type="submit" name="Submit"/>
</form>

<?php
echo $_REQUEST['page'];
include ($_REQUEST['page']);
?>