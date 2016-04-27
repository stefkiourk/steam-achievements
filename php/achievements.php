<!DOCTYPE html>

<head>
	
	<title> Steam Achievements </title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/achievements.css" type="text/css"/>
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script type="text/javascript" src="../js/achievements.js"></script>
	
	
	
	
</head>
<body>
<?php

error_reporting(1);
echo '<div id="wrapper">';

$game = $_GET['game'];
$steamID = $_GET['id'];

	$link = 'http://steamcommunity.com/id/' . $steamID . '/games?tab=all&xml=1';
	$gamesData = simplexml_load_file($link);
	

if($gamesData ===  FALSE){ 

 echo "Error loading steam community's data";

}else
{

$link = 'http://steamcommunity.com/id/' . $steamID . '/stats/' . $game . '?xml=1';

$achievementsData = simplexml_load_file($link);

foreach($achievementsData->achievements->achievement as $achievement){


	
	
	
		if ($achievement["closed"] == "1"){
		
		
		echo '<img  src="' . $achievement->iconClosed . '"  title="' .htmlspecialchars ($achievement->description) .'"/>';
		
		
		
		}
		else{
		
		
		echo '<img src="' . $achievement->iconOpen . '"  title="' .htmlspecialchars  ($achievement->description) .'"/>';
		
		
		}
		
	
	


	
	
}

}

?>


</div>
</body>
</html>