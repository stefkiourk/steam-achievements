<!DOCTYPE html>

<head>
	
	<meta charset="UTF-8" />
	<title> Steam Achievements </title>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jqueryui.js"></script>
	<script type="text/javascript" src="js/games.js"></script>
	<script type="text/javascript" src="highslide/highslide-full.js"></script>
	<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
	<script type="text/javascript">
		hs.align = 'center';
	</script>

</head>

<body>

<div id="loader">
<img src="img/loading.gif" alt="loader image">
</div>

<div id="user">

<form id="unameform">
username: <input type="text" name="firstname" id="data" value="tomobot"><input type="submit" value="Go"><br>
<button type="button" id="hideme">Hide games with no achievements</button>
</form>

</div>

<div id="main">
	
		
<?php  include("php/games.php"); ?>


</div>
<!--End of "main" div -->


</body>
</html>
 