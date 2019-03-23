<?php 
	//Needed to bypass Chrome's ERR_BLOCKED_BY_XSS_AUDITOR
	// header('X-XSS-Protection:0'); 
?>
<form method="post" action="authenticate.php" autocomplete="off">
<!-- <form method="post" action="stolen.php" autocomplete="off"> -->
  Username:<br/><input type="text" name="username"/>
  <br/>Password:<br/><input type="password" name="password"/>
  <br/><input type="submit" value="Login"/>
</form>
<br/>
<br/>
<br/>
<br/>
<form method="get" action="" autocomplete="off">
  <input type="text" name="search"/>
  <input type="submit" name="Submit"/>
</form>

<h1>Search Results</h1>
<h2>You searched for: <?php echo $_REQUEST['search'] ?></h2>
<h2>You searched for (via Javascript): <span id="search-param"></span></h2>
<?php echo "<script>
/**
 * Grab parameters
 * @see https://gomakethings.com/getting-all-query-string-values-from-a-url-with-vanilla-js/
 */
var getParams = function (url) {
	var params = {};
	var parser = document.createElement('a');
	parser.href = url;
	var query = parser.search.substring(1);
	var vars = query.split('&');
	for (var i = 0; i < vars.length; i++) {
		var pair = vars[i].split('=');
		params[pair[0]] = decodeURIComponent(pair[1]);
	}
	return params;
};

var params = getParams(window.location.href);

console.log('params:', params);

document.getElementById('search-param').innerText = params.search;

</script>" ?>
