<?php 
session_start();
require("new-connection.php");

$query = "SELECT name, quote, created_at
FROM users";

$results = fetch($query);
// foreach($results as $row)

?>

<html>
	<head>
		<title>Quotes</title>
		<meta charset - "UTF-8">
		<meta name = "description" content = "Quotes"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<meta name = "viewport" content = "width-device-width, initial-scale = 1.0"/>
		<link rel = "stylesheet" href = "style.css"/>
	</head>
	<body>
		<!-- <h1>Here are my awesome quotes!</h1>
		<div class = quote>
			<p><?= $row['quote'] . "<br>" ?></p>
			<h2><?= $row['name'] ."\n\n\n" . $row ['created_at'] . "<br>" ?></h2>
		</div> -->
		
		<h1>Here are my awesome quotes!</h1>
		<div class = "quote">
			<p> <? foreach($results as $row) 
			{
					echo $row['quote'] . "<br>" ; 
					echo $row['name'] . "<br> <hr>" ;

			} ?></p>
		
	</body>
</html>