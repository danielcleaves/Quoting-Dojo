<?php 
session_start();
?>

<html>
	<head>
		<title>Quoting Dojo</title>
		<meta charset - "UTF-8">
		<meta name = "description" content = "Quoting Dojo"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<meta name = "viewport" content = "width-device-width, initial-scale = 1.0"/>
		<link rel = "stylesheet" href = "stylesheet.css"/>

	</head>
	<body>
		<h1>Welcome to Quoting Dojo</h1>
				
				<form action = "process.php" method = "post">
					<div id = "name">
						<h2>Your Name: </h2> <input id = "name_box" type = "text" name = "f_name" placeholder = "Your Name" />

					<div id = "quote">
						<h2>Your quote: </h2> <input id = "text_box" type = "text" name = "quote" placeholder = "Type your Quote" />
					</div>

						<h3><?php 

					if(isset($_SESSION['errors']))
					{
						foreach($_SESSION['errors'] as $error)
						{
							echo $error, "<br>";
						}
						unset($_SESSION['errors']);
					}

					?> </h3>

					<input class = "btn" type = "submit" value = "Add my quote!"/>
				</form>

				<form action = "main.php" method = "post">
					<input class = "btn" type = "submit" value = "Skip to quotes!"/>
			
				</form>
	</body>
</html>