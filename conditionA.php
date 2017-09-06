<!DOCTYPE html> 
<html>
 <head>
	<title>Tutor Dialogue</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
 </head>
 <body>

	<?php // Learnet test ?>

	<?php

		session_start();

		//login form function
	
		function loginForm (){
			file_put_contents('log/log2.html', null);
			file_put_contents('log/count2.html',null);
			file_put_contents('log/counted2.html',null);
			file_put_contents('log/tutor2.html',null);
			echo'
			<div id="loginform">
			<form action="conditionA.php" method="POST">
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

	?>

	<?php

	//user logs out

	if(isset($_GET['logout'])){
		$fp = fopen("log/log2.html", 'a');
		fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the session.</i><br></div>"); 
		fclose($fp);

		$newfile = 'data/'. $_SESSION['name'] .'.html';

		$fnewlog = fopen($newfile,'a') or die("can't open file");
		$fcontents = file_get_contents('log/log2.html');

		fwrite($fnewlog,$fcontents);

		fclose($fnewlog);
		fclose($flog);

		file_put_contents('log/log2.html', null);
		
		session_destroy();
		header("Location: learner.php");
	}

	if(!isset($_SESSION['name'])){
		loginForm();
	}

	else{
	?>

	<div id="wrapper">

		<div id="menu">
			<!-- <p class="logout"><a id="exit" href="#">Log out</a></p> -->
			<div style="clear:both"></div>
		</div>
		
		<div id="chatbox"><?php
			//if(file_exists("log/log2.html") && filesize("log/log2.html") > 0) {
			//	$handle = fopen("log/log2.html","r");
			//	$contents = fread($handle, filesize("log/log2.html"));
			//	fclose($handle);
			
			//	echo $contents;
			//}
		?></div>

		<form name="message" action="" method="POST">
			<input name="usermsg" type="text" id="usermsg" size="63" />
			<input name="submitmsg" type ="submit" id="submitmsg" value="Enter" />
		</form>

	</div>


		<div id="talker">
	
			<script language="JavaScript" type="text/javascript" src="http://vhss-d.oddcast.com/vhost_embed_functions_v2.php?acc=5314441&js=1"></script>

			<script language="JavaScript" type="text/javascript">

				AC_VHost_Embed(5314441,200,300,'',1,1, 2487894, 0,1,0,'222bd747ab4ecdf3debc2912ab2f147e',9);

			</script>

		</div>	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

	<script type="text/javascript">

	 //jQuery Document

	$(document).ready(function(){

		//If the user submits the form
		
		$("#submitmsg").click(function(){	

			var clientmsg = $("#usermsg").val();
			$.post("log2.php", {text: clientmsg});				
			$("#usermsg").attr("value", "");
			document.getElementById("usermsg").focus();
			$("#usermsg").attr("disabled",false);
			$("#submitmsg").attr("disabled",false);
			$.post("lock2.php");
			return false;

		});	
	
		//Load the file containing the chat log
		// function loadLog(){		
			
		//}

		//Tutor speech text

		function tutorTalk(){

			var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
			$.ajax({
				url: "log/log2.html",
				cache: false,
				success: function(html){		
					$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
					//Auto-scroll			
					var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
					if(newscrollHeight > oldscrollHeight){
						$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
					}				
			  	},
			});
			
			$.ajax({
				url: "log/count2.html",
				type: "get",
				success: function(txt) {
					var count = String(txt);

					$.ajax({
						url: "log/counted2.html",
						type: "get",
						success: function(txt2) {
							var counted = String(txt2)

							if(count != counted){

								$.ajax({
									url: "log/tutor2.html",
									type: "get",
									success: function(txt3) {
										var voice = String(txt3);
										//javascript:setFacialExpression(0,-1,100);
										javascript:sayText(voice,3,1,3);
										$.post("purgevoice2.php");
										//disable text entry until tutor responds
										//setTimeout(function(){$("#usermsg").attr("disabled",false);},4000);
										//setTimeout(function(){$("#submitmsg").attr("disabled",false);},4000);
									}
								});

							$.post("count2.php");


							}

						}
					});
				}
			});

			
		}

		function unlock(){

			$.ajax({
				url:"log/lock2.html",
				type: "get",
				success: function(txt) {
					var lock = String(txt);

					if(lock === "unlock"){

						$("#usermsg").attr("disabled",false);
						$("#submitmsg").attr("disabled",false);
					
					}

				}
			});

		}

		function advance(){

			$.ajax({
				url:"log/advance2.html",
				type: "get",
				success: function(txt) {
					var adv = String(txt);

					if(adv === "go"){

						setTimeout(function(){window.location = 'https://muohiopsychology.qualtrics.com/SE/?SID=SV_cGtQbZm298Vs5XD';},10000);
					
					}

				}
			});

		}	

		//setInterval (loadLog, 2500);	//Reload file every 2500 ms or x ms if you please
		setInterval (tutorTalk, 2000);  //Speak tutor text every 2000 ms or x ms if you please
		setInterval (unlock, 3000); //check to unlock
		setInterval (advance, 3000); //check to advance

	});

	</script>

	<script type="text/javascript">

	 //jQuery Document

	$(document).ready(function(){

		//If the user wants to end session

		$("#exit").click(function(){
			var exit = confirm("Are you sure you want to end the session?");
			if(exit==true){window.location = 'learner.php?logout=true';}
		});
	
	});

	</script>

	<script type="text/javascript">

	//jQuery Document

		//focus cursor
		
		window.onload = function(){
   			document.getElementById("usermsg").focus();
			$("#usermsg").attr("disabled",true);
			$("#submitmsg").attr("disabled",true);
			setTimeout(function(){$("#usermsg").attr("disabled",false);},10000);
			setTimeout(function(){$("#submitmsg").attr("disabled",false);},10000);
		};

	
	</script>

	<?php
	}
	?>

 </body>
</html>