<?php

	$steamID = "tomobot";
	$link = 'http://steamcommunity.com/id/' . $steamID . '/games?tab=all&xml=1';
	$gamesData = simplexml_load_file($link);
	
?>