<?php


error_reporting(1);


$steamID = $_GET['data'];
if ($steamID == "")
	$steamID = "tomobot";
$link = 'http://steamcommunity.com/id/' . $steamID . '/games?tab=all&xml=1';
$gamesData = simplexml_load_file($link);

if($gamesData ===  FALSE || $gamesData->error != ""){ 

 echo "Error loading steam community's data or profile is private";

}else
{

foreach($gamesData->games->game as $game){

	$link  = $game->statsLink;
	$pieces = explode("/", $link);
	$gameName = stripslashes(addslashes ($game->name));
	
	if (isset($game->statsLink) && ($gameName != "Alien Swarm") && ($gameName != "PAYDAY: The Heist") && ($game->name != "SSHD:FirstEncounter")){
	
		echo '<a href="php/achievements.php?game=' . htmlspecialchars($pieces[6]). '&amp;id=' . $steamID;
		echo '" target="_blank" onclick="return hs.htmlExpand(this, {'.
			"objectType: 'iframe', width: 800, ".
			"creditsPosition: 'bottom left', headingText: '". str_replace("'", "_", $game->name) ."', ".
			"wrapperClassName: 'titlebar' } )";
			
	
		
		echo '"><img src="';
		echo $game->logo;
		echo '" class="hasAchievements" alt="' . str_replace("'", "_", $game->name) . '"';
		echo ' width="184" height="69"/></a>';
		print "\n";
		
	}
	else{
	
		echo '<img src="';
		echo $game->logo;
		echo '" class="noAchievements" alt="' . str_replace("'", "_", $game->name) . '"';
		echo ' width="184" height="69"/>';
		print "\n";
		
	
	}
	

	
	
}

}











?>