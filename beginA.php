<!DOCTYPE html> 
<html>
 <head>
	<title>Begin Experiment</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
 </head>
 <body>


	<?php

		session_start();

		//login form function
	
		function loginForm (){
			echo'
			<div id="loginform">
			<form action="beginA.php" method="POST">
				<p>Please enter your id to continue:</p>
				<label for="name">ID:</label>
				<input type="text" name="name" id="name" />
				<input type="submit" name="enter" value="Enter" />
			</form>
			</div>
			';
		}

		if(isset($_POST['enter'])){

			if($_POST['name'] == "log"){
				echo '<span class="error">Please use a different name</span>';
			}

			if($_POST['name'] == "Log"){
				echo '<span class="error">Please use a different name</span>';
			}

			else if($_POST['name'] == "backup"){
				echo '<span class="error">Please use a different name</span>';
			}

			else if($_POST['name'] == "Backup"){
				echo '<span class="error">Please use a different name</span>';
			}

			else if($_POST['name'] == "tutor"){
				echo '<span class="error">Please use a different name</span>';
			}

			else if($_POST['name'] == "Tutor"){
				echo '<span class="error">Please use a different name</span>';
			}

			else if($_POST['name'] != ""){
				$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
			}

			else{
				echo '<span class="error">Please type in a name</span>';
			}
		}


	if(!isset($_SESSION['name'])){
		loginForm();
	}

	else{

		echo'
		
			
			<form action="introA.php" method="POST">
				<input type="submit" name="enter" value="Click here to begin" />
			</form>
			

		';

	}

	?>


 </body>
</html>