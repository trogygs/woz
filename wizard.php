<!DOCTYPE html> 
<html>
 <head>
	<title>Wizard Dialogue</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
 </head>
 <body>

	<?php // Wizard test ?>

	<?php

		session_start();
		$_SESSION['name']='Tutor';
		
	?>

	<div id="wrapper">

		<div id="menu">
			<p class="logout"><a id="exit" href="#">Log out</a></p>
			<div style="clear:both"></div>
		</div>
		
		<div id="chatbox"><?php
			//if(file_exists("log/log.html") && filesize("log/log.html") > 0) {
			//	$handle = fopen("log/log.html","r");
			//	$contents = fread($handle, filesize("log/log.html"));
			//	fclose($handle);
			
			//	echo $contents;
			//}
		?></div>

		<form name="message" action="" method="POST">
			<input name="textmsg" type="text" id="textmsg"/>
			<input name="submittext" type ="submit" id="submittext" value="Enter" />


			<br><span><font color = "blue"><b>Pumps: &nbsp;&nbsp;&nbsp;</b></font></span><select name="feedback" id="feedback"><label>Pumps:
				<option value="Try to explain more of what you learned about that idea.">Try to explain more of what you learned about that idea.</option>
				<option value="Tell me about that in more detail.">Tell me about that in more detail.</option>
				<option id="nopump" value="What else can you say about what you learned?">XXX What else can you say about what you learned?</option>
				<option value="Can you talk some more about that idea?">Can you talk some more about that idea?</option>
				<option value="Can you add a bit more to your essay about that idea?">Can you add a bit more to your essay about that idea?</option>
				<option id="nopump" value="Can you say some more about what you learned?">XXX Can you say some more about what you learned?</option>
				<option value="Try to add a bit more about that idea.">Try to add a bit more about that idea.</option>
				<option value="What else can you say about that?">What else can you say about that?</option>
				<option id="nopump" value="Tell me more about what you learned in the lesson.">XXX Tell me more about what you learned in the lesson.</option>
				<option value="See if you can think of a bit more about that idea to add.">See if you can think of a bit more about that idea to add.</option>
			</select>
			<input name="submitmsg" type ="submit" id="submitmsg" value="Enter" />

			<br><span><font color = "blue"><b>Pumps: &nbsp;&nbsp;&nbsp;</b></font></span><select name="feedback2" id="feedback2">
				<option value="Can you say some more about what you remember about that?">Can you say some more about what you remember about that?</option>
				<option id="nopump" value="What else can you say about the lesson?">XXX What else can you say about the lesson?</option>
				<option value="What else did you learn about that?">What else did you learn about that?</option>
				<option value="Can you explain that in more detail?">Can you explain that in more detail?</option>
				<option id="nopump" value="Can you say some more about the lesson?">XXX Can you say some more about the lesson?</option>
				<option value="What else did you learn about that in the lesson?">What else did you learn about that in the lesson?</option>
				<option value="See if you can expand on that idea a bit more.">See if you can expand on that idea a bit more.</option>
				<option id="nopump" value="Try to add some more about what you learned.">XXX Try to add some more about what you learned.</option>
				<option value="Try to say a little more about that idea.">Try to say a little more about that idea.</option>
				<option value="Please explain that some more.">Please explain that some more.</option>
			</select>
			<input name="submitmsg2" type ="submit" id="submitmsg2" value="Enter" />

			<br><span><font color = "blue"><b>Pumps: &nbsp;&nbsp;&nbsp;</b></font></span><select name="feedback3" id="feedback3">
				<option id="nopump" value="What else can you add from the lesson?">XXX What else can you add from the lesson?</option>
				<option value="Try to add more about that idea to your essay.">Try to add more about that idea to your essay.</option>
				<option value="Try to elaborate on that idea.">Try to elaborate on that idea.</option>
				<option id="nopump" value="Tell me some more about the lesson.">XXX Tell me some more about the lesson.</option>
				<option value="Please elaborate on that idea a bit.">Please elaborate on that idea a bit.</option>
				<option value="See if you can add a little more about that to your essay.">See if you can add a little more about that to your essay.</option>
				<option id="nopump" value="Please say a little more about the lesson.">XXX Please say a little more about the lesson.</option>
				<option value="Can you elaborate on that a bit in your essay?">Can you elaborate on that a bit in your essay?</option>
				<option value="What else can you remember about that?">What else can you remember about that?</option>
				<option id="nopump" value="Try to write a bit more about what you remember from the lesson.">XXX Try to write a bit more about what you remember from the lesson.</option>
			</select>
			<input name="submitmsg3" type ="submit" id="submitmsg3" value="Enter" />

			<br><span><font color = "green"><b>Prompts: </b></font></span></span><select name="feedback5" id="feedback5">
				<option value="What did you learn about the base rate of breast cancer?">What did you learn about the base rate of breast cancer?</option>
				<option value="What can you add to your essay about how cancer spreads through the body?">What can you add to your essay about how cancer spreads through the body?</option>
				<option value="Can you add something you learned about when a woman has family members with breast cancer?">Can you add something you learned about having family members with breast cancer?</option>
				<option value="Can you say something about BRCA 1 and BRCA 2 genes?">Can you say something about BRCA 1 and BRCA 2 genes?</option>
				<option value="What do you remember about the chances of getting breast cancer with BRCA mutations?">What do you remember about the chances of getting breast cancer with BRCA mutations?</option>
				<option value="Can you add something about when a woman gets a positive test result for BRCA mutations?">Can you add something about when a woman gets a positive test result for BRCA mutations?</option>
				<option value="Can you say something about what a negative test result for BRCA mutations means?">Can you say something about what a negative test result for BRCA mutations means?</option>
				<option value="Try adding something about active surveillance.">Try adding something about active surveillance.</option>
				<option value="What can you add about prophylactic surgery?">What can you add about prophylactic surgery?</option>
				<option value="Can you add something to your essay about using drugs to prevent breast cancer?">Can you add something to your essay about using drugs to prevent breast cancer?</option>
			</select>
			<input name="submitmsg5" type ="submit" id="submitmsg5" value="Enter" />

			<br><span><font color = "green"><b>Prompts: </b></font></span><select name="feedback6" id="feedback6">
				<option value="What can you say about where breast cancer forms?">What can you say about where breast cancer forms?</option>
				<option value="Can you say something about different kinds of tumors?">Can you say something about different kinds of tumors?</option>
				<option value="Can you say something about the age that family members get breast cancer?">Can you say something about the age that family members get breast cancer?</option>
				<option value="Try adding something about having male relatives with breast cancer.">Try adding something about having male relatives with breast cancer.</option>
				<option value="What can you remember about reasons a woman might want to be tested for BRCA mutations?">What can you remember about reasons a woman might want to be tested?</option>
				<option value="What can you remember about reasons a woman might not want to be tested for BRCA mutations?">What can you remember about reasons a woman might not want to be tested?</option>
				<option value="What can you say about age as a risk factor for breast cancer?">What can you say about age as a risk factor for breast cancer?</option>
				<option value="Can you add something about the process of metastasis?">Can you add something about the process of metastasis?</option>
				<option value="Can you add something about the different stages of breast cancer?">Can you add something about the different stages of breast cancer?</option>
				<option value="What can you add to your essay about the Gail Model?">What can you add to your essay about the Gail Model?</option>
			</select>
			<input name="submitmsg6" type ="submit" id="submitmsg6" value="Enter" />

			<br><span><font color = "green"><b>Prompts: </b></font></span><select name="feedback7" id="feedback7">
				<option value="Try telling me about the way that doctors measure risk.">Try telling me about the way that doctors measure risk.</option>
				<option value="What can you say about breast cancer that has spread to another part of the body?">What can you say about breast cancer that has spread to another part of the body?</option>
				<option value="Try adding something about race or ethnicity and breast cancer.">Try adding something about race or ethnicity and breast cancer.</option>
				<option value="What do you remember about when a woman has relatives with other kinds of cancer, like skin cancer?">What do you remember about when a woman has relatives with other kinds of cancer, like skin cancer?</option>
				<option value="Try telling me something about environmental risk factors.">Try telling me something about environmental risk factors.</option>
				<option value="Can you say anything about what the GINA law does?">Can you say anything about what the GINA law does?</option>
				<option value="What can you say about how genes influence cancer?">What can you say about how genes influence cancer?</option>
				<option value="What can you say about when breast cancer is the most dangerous?">What can you say about when breast cancer is the most dangerous?</option>
				<option value="Try saying something about genetic discrimination.">Try saying something about genetic discrimination.</option>
				<option value="Can you talk about some other risk factors for breast cancer?">Can you talk about some other risk factors for breast cancer?</option>
			</select>
			<input name="submitmsg7" type ="submit" id="submitmsg7" value="Enter" />


			<button name="submitmsg11" type="button" id="submitmsg11" value="Only one.">Multiple sentences.</button>
			
			<button name="submitmsg10" type="button" id="submitmsg10" value="Still there?.">Slow response.</button>

			<button name="submitmsg9" type="button" id="submitmsg9" value="Can you remember.">Doesn't remember.</button>

			<button name="submitmsg8" type="button" id="submitmsg8" value="Sorry.">Blank response.</button>
			
			<button name="submitmsg12" type="button" id="submitmsg12" value="Done soon.">Done soon.</button>
			
			<button name="submitmsg13" type="button" id="submitmsg13" value="One more.">One more sentence.</button>
			
			<button name="submitmsg4" type="button" id="submitmsg4" value="Good work.">Participant is finished</button>
			
		</form>

	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

	<script type="text/javascript">

	 //jQuery Document

	$(document).ready(function(){

		//If the user submits the form

		$("#submittext").click(function(){

			var clientmsg = $("#textmsg").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#textmsg").attr("value", "");
			return false;
		});
		
		$("#submitmsg").click(function(){	

			var clientmsg = $("#feedback").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback").attr("value", "");
			return false;

		});	

		$("#submitmsg2").click(function(){	

			var clientmsg = $("#feedback2").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback2").attr("value", "");
			return false;

		});	

		$("#submitmsg3").click(function(){	

			var clientmsg = $("#feedback3").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback3").attr("value", "");
			return false;

		});	

		$("#submitmsg4").click(function(){	

			$.post("tutorlog.php", {text: "Good work. Please tell the experimenter that you are ready to continue with the next part of the experiment."});
			return false;

		});	


		$("#submitmsg8").click(function(){	

			$.post("tutorlog.php", {text: "I'm sorry, I didn't get that."});
			return false;

		});	
	

		$("#submitmsg9").click(function(){	

			$.post("tutorlog.php", {text: "Can you remember anything at all?"});
			return false;

		});	

		$("#submitmsg10").click(function(){	

			$.post("tutorlog.php", {text: "Are you still there?"});
			return false;

		});	

		$("#submitmsg12").click(function(){	

			$.post("tutorlog.php", {text: "Try to see if you can say a bit more, we'll be done soon."});
			return false;

		});

		$("#submitmsg13").click(function(){	

			$.post("tutorlog.php", {text: "Can you try saying just one more thing before we finish?"});
			return false;

		});

		$("#submitmsg11").click(function(){	

			$.post("tutorlog.php", {text: "Please try to remember to only enter one sentence at a time."});
			return false;

		});

		$("#submitmsg5").click(function(){	

			var clientmsg = $("#feedback5").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback5").attr("value", "");
			return false;

		});	
	
		$("#submitmsg6").click(function(){	

			var clientmsg = $("#feedback6").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback6").attr("value", "");
			return false;

		});	
	
		$("#submitmsg7").click(function(){	

			var clientmsg = $("#feedback7").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback7").attr("value", "");
			return false;

		});	
	
		//Load the file containing the chat log
		function loadLog(){		
			var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
			$.ajax({
				url: "log/log.html",
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
		}

		function learnerActive(){
		
			$ajax({
				url: "log/log.html",
				type: "get",
				success: function(contents) {
					var script = String(contents);
					//if(contents){
						document.bgColor="#CCFFFF";
						setTimeout(function(){document.bgColor="#FFFFFF";},1000);
					//}
				}

			});

		}

		setInterval (loadLog, 2500);	//Reload file every 2500 ms or x ms if you w
		setInterval (learnerActive, 5000);
	});

	</script>

	<script type="text/javascript">

	 //jQuery Document

	$(document).ready(function(){

		//If the user wants to end session

		$("#exit").click(function(){
			var exit = confirm("Are you sure you want to end the session?");
			if(exit==true){window.location = 'index.php?logout=true';}
		});
	
	});

	</script>

	<?php
	//}
	?>

	<!- <iframe height="184px" width="300px" scrolling="no" frameborder="0" src="http://ruwix.com/widget/stopwatch-gen/"></iframe>

 </body>
</html>