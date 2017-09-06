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


			<br><span>General Feedback</span><select name="feedbackI" id="feedbackI">
				<option value="Try to add more to your argument about that idea.">Try to add more to your argument about that idea.</option>
				<option value="Can you add more detail to your argument?">Can you add more detail to your argument?</option>
				<option value="What else can you say in your argument about what you learned?">What else can you say in your argument about what you learned?</option>
				<option value="Can you talk about that a bit more in your argument?">Can you talk about that a bit more in your argument?</option>
				<option value="Tell me some more from the lesson that would strengthen your argument.">Tell me some more from the lesson that would strengthen your argument.</option>
				<option value="Can you add a bit more to your argument about that idea?">Can you add a bit more to your argument about that idea?</option>
				<option value="What else can you add from the lesson that might convince someone of your argument?">What else can you add from the lesson that might convince someone of your argument?</option>
				<option value="Can you add something else that you learned to your argument?">Can you add something else that you learned to your argument?</option>
				<option value="Try to add a little more to your argument.">Try to add a little more to your argument.</option>
				<option value="What else can you say in your argument?">What else can you say in your argument?</option>
				<option value="See if you can think of a bit more to add about that idea to your argument.">See if you can think of a bit more to add about that idea to your argument.</option>
				<option value="Can you say something else that you remember in your argument?">Can you say something else that you remember in your argument?</option>
				<option value="Can you elaborate on that some to make your argument stronger?">Can you elaborate on that some to make your argument stronger?</option>
				<option value="What else can you say from the lesson in your argument?">What else can you say from the lesson in your argument?</option>
				<option value="What other information can you add about that in your argument?">What other information can you add about that in your argument?</option>
				<option value="Can you explain a little more about that in your argument to make it stronger?">Can you explain a little more about that in your argument to make it stronger?</option>
				<option value="Can you say something else in your argument about the lesson?">Can you say something else in your argument about the lesson?</option>
				<option value="What else from the lesson would make your argument more convincing?">What else from the lesson would make your argument more convincing?</option>
				<option value="See if you can strengthen that idea in your argument a bit.">See if you can strengthen that idea in your argument a bit.</option>
				<option value="Try to add something else you learned to your argument.">Try to add something else you learned to your argument.</option>
				<option value="Tell me some more about the lesson that supports your argument.">Tell me some more about the lesson that supports your argument.</option>
				<option value="Try to say a little more about that in your argument.">Try to say a little more about that in your argument.</option>
				<option value="See if you can say some more about that in your argument.">See if you can say some more about that in your argument.</option>
				<option value="Try to add some more about that idea to your argument.">Try to add some more about that idea to your argument.</option>
				<option value="Try to elaborate on that point in your argument.">Try to elaborate on that point in your argument.</option>
				<option value="Please elaborate on that idea in your argument a little.">Please elaborate on that idea in your argument a little.</option>
				<option value="Please add a little more from what you learned to your argument.">Please add a little more from what you learned to your argument.</option>
				<option value="What else do your remember from the lesson to add to your argument?">What else do your remember from the lesson to add to your argument?</option>
				<option value="Try to write a bit more in your argument.">Try to write a bit more in your argument.</option>
				<option value="Please explain your argument just a bit more.">Please explain your argument just a bit more.</option>
				</select>
			<input name="submitmsgI" type="submit" id="submitmsgI" value="Enter" />


			<br><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspClaims</span><select name="feedbackH" id="feedbackH">
				<option value="Can you state that more precisely? What is the major conclusion that you would want someone to be convinced of by your argument?">Can you state that more precisely? What is the major conclusion that you would want someone to be convinced of by your argument?</option>
				<option value="Please try to clarify that a bit. What specifically are you arguing for?">Please try to clarify that a bit. What specifically are you arguing for?</option>
				<option value="Try to say that a little more clearly.  What is the major point of your argument?">Try to say that a little more clearly.  What is the major point of your argument?</option>
				</select>
			<input name="submitmsgH" type="submit" id="submitmsgH" value="Enter" />

			<br><span>Sub Claims</span><select name="feedbackA" id="feedbackA">
				<option value="Now I would like you to try identifying a smaller point that you want to make in your argument.">Now I would like you to try identifying a smaller point that you want to make in your argument.</option>
			 	<option value="What other points do you want to make as part of your argument in favor of breast cancer screening and testing?">What other points do you want to make as part of your argument in favor of breast cancer screening and testing?</option>
			 	<option value="Can you think of one more conclusion that you want to convince people of in your argument?">Can you think of one more conclusion that you want to convince people of in your argument?</option>
			 	<option value="Try to clarify that. Remember, this is a smaller conclusion that you want listeners to be convinced of.">Try to clarify that. Remember, this is a smaller conclusion that you want listeners to be convinced of.</option>
			 	<option value="Can you try being a bit more clear about that? What is the specific point that you want people to be convinced of?">Can you try being a bit more clear about that? What is the specific point that you want people to be convinced of?</option>
			 	<option value="Can you be a little more precise? What do you want to convince people to believe about screening for breast cancer?">Can you be a little more precise? What do you want to convince people to believe about screening for breast cancer?</option>
			 	</select>
			<input name="submitmsgA" type="submit" id="submitmsgA" value="Enter" />




			<br><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspReasons</span><select name="feedbackB" id="feedbackB">
				<option value="Now I want you to add some evidence that supports the conclusion you want to convince people of. What information from the lesson could you tell someone to convince them?">Now I want you to add some evidence that supports the conclusion you want to convince people of. What information from the lesson could you tell someone to convince them?</option>
				<option value="Let's add another piece of information from the lesson that supports your claim. What can you recall from the lesson that supports that idea?">Let's add another piece of information from the lesson that supports your claim. What can you recall from the lesson that supports that idea?</option>
				<option value="Try adding some more supporting evidence for this new conclusion. What information from the lesson could you use to persuade someone that this conclusion is true?">Try adding some more supporting evidence for this new conclusion. What information from the lesson could you use to persuade someone that this conclusion is true?</option>
				<option value="Try clarifying that a bit. What specific piece of information supports your claim?">Try clarifying that a bit. What specific piece of information supports your claim?</option>
				<option value="Can you say that more clearly? Remember, this is supposed to be information that supports the conclusion you want people to be convinced of.">Can you say that more clearly? Remember, this is supposed to be information that supports the conclusion you want people to be convinced of.</option>
				<option value="Try being more precise. Make sure this is information that directly supports the point you want people to be convinced of.">Try being more precise. Make sure this is information that directly supports the point you want people to be convinced of.</option>
				</select>
			<input name="submitmsgB" type="submit" id="submitmsgB" value="Enter" />


			<br><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWarrants</span><select name="feedbackC" id="feedbackC">
				<option value="Now I would like you to try to explain why the information you just provided supports you conclusion. Please explain it even if it seems like common sense.">Now I would like you to try to explain why the information you just provided supports you conclusion. Please explain it even if it seems like common sense.</option>
				<option value="Now try to state why that evidence supports your overall claim.">Now try to state why that evidence supports your overall claim.</option>
				<option value="Please clearly say why this new evidence should convince someone to believe your overall argument.">Please clearly say why this new evidence should convince someone to believe your overall argument.</option>
				<option value="Try to state that more clearly. What you want to do is make it clear why someone should believe your argument based on the evidence you provided.">Try to state that more clearly. What you want to do is make it clear why someone should believe your argument based on the evidence you provided.</option>
				<option value="Try to say what the connection between your information and the overall claim is. Please state it clearly even if you believe the connection is obvious and common sense.">Try to say what the connection between your information and the overall claim is. Please state it clearly even if you believe the connection is obvious and common sense.</option>
				<option value="Can you try to be a bit more precise about that? Remember that the purpose of stating this is so that someone reading your argument will understand exactly why they should be convinced by your evidence.">Can you try to be a bit more precise about that? Remember that the purpose of stating this is so that someone reading your argument will understand exactly why they should be convinced by your evidence.</option>
				</select>
			<input name="submitmsgC" type="submit" id="submitmsgC" value="Enter" />


			<br><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQualifier</span><select name="feedbackE" id="feedbackE">
				<option value="Now I want you to think about a possible limitation of the evidence you just used in your argument and explain what that limitation is.">Now I want you to think about a possible limitation of the evidence you just used in your argument and explain what that limitation is.</option>
				<option value="Try to include another possible limitation about this evidence.">Try to include another possible limitation about this evidence.</option>
				<option value="What other limitations might there be with this evidence?">What other limitations might there be with this evidence?</option>
				<option value="Try to be a bit clearer about what limitations there are. For example, is the evidence you included always true?">Try to be a bit clearer about what limitations there are. For example, is the evidence you included always true?</option>
				<option value="Can you state that limitation more precisely? Under what conditions might your evidence not hold up?">Can you state that limitation more precisely? Under what conditions might your evidence not hold up?</option>
				<option value="Try to be more specific about what limitations there are. Acknowledging limitations is an important part of a good argument.">Try to be more specific about what limitations there are. Acknowledging limitations is an important part of a good argument.</option>
				</select>
			<input name="submitmsgE" type="submit" id="submitmsgE" value="Enter" />


			<br><span>Counterargument</span><select name="feedbackF" id="feedbackF">
				<option value="What counterargument might someone make using that limitation if they disagree with you and think that testing is not important?">What counterargument might someone make using that limitation if they disagree with you and think that testing is not important?</option>
				<option value="What is another counterargument that someone might make based on that limitation?">What is another counterargument that someone might make based on that limitation?</option>
				<option value="How might someone who isn't convinced because of that limitation disagree with you?">How might someone who isn't convinced because of that limitation disagree with you?</option>
				<option value="Try to state a possible counterargument more clearly. Anticipating counterarguments is a great way to make an argument stronger.">Try to state a possible counterargument more clearly. Anticipating counterarguments is a great way to make an argument stronger.</option>
				<option value="What else might be included in a counterargument?">What else might be included in a counterargument?</option>
				<option value="Can you expand that counterargument a bit so that it is clearer?">Can you expand that counterargument a bit so that it is clearer?</option>
				</select>
			<input name="submitmsgF" type="submit" id="submitmsgF" value="Enter" />


			<br><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRebuttal</span><select name="feedbackG" id="feedbackG">
				<option value="Now that you have a counterargument in mind, how would you respond to it?">Now that you have a counterargument in mind, how would you respond to it?</option>
				<option value="What would you say to someone who made the counterargument you came up with above?">What would you say to someone who made the counterargument you came up with above?</option>
				<option value="How would you convince someone who made that counterargument that you were right?">How would you convince someone who made that counterargument that you were right?</option>
				<option value="Can you be more specific? How would you respond to that counterargument in a way that would convince them otherwise?">Can you be more specific? How would you respond to that counterargument in a way that would convince them otherwise?</option>
				<option value="Try to more clearly say what your response to that argument would be. What would be most likely to make them change their mind?">Try to more clearly say what your response to that argument would be. What would be most likely to make them change their mind?</option>
				<option value="Try to be a bit clearer on how you would address the limitations pointed out in that counterargument.">Try to be a bit clearer on how you would address the limitations pointed out in that counterargument.</option>
				</select>
			<input name="submitmsgG" type="submit" id="submitmsgG" value="Enter" />


			
			
			<button name="submitmsg8" type="button" id="submitmsg8" value="Stalled">Stalled</button>
			<button name="submitmsg10" type="button" id="submitmsg10" value="Stalled 2">Stalled 2</button>
			<button name="submitmsg9" type="button" id="submitmsg9" value="Stalled 3">Stalled 3</button>
			<button name="submitmsg12" type="button" id="submitmsg12" value="Stalled 4">Stalled 4</button>
			<br>
			<button name="submitmsg13" type="button" id="submitmsg13" value="Blank Entry">Blank Entry</button>
			<button name="submitmsg15" type="button" id="submitmsg15" value="Slow Response">Slow Response</button>
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
			unlock();
			return false;
		});
		
		$("#submitmsg").click(function(){	

			var clientmsg = $("#feedback").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback").attr("value", "");
			unlock();
			return false;

		});	

		$("#submitmsg2").click(function(){	

			var clientmsg = $("#feedback2").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback2").attr("value", "");
			unlock();
			return false;

		});	

		$("#submitmsg3").click(function(){	

			var clientmsg = $("#feedback3").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback3").attr("value", "");
			unlock();
			return false;

		});	

		$("#submitmsg4").click(function(){	

			$.post("tutorlog.php", {text: "Good work. Please tell the experimenter that you are ready to continue with the next part of the experiment."});
			unlock();
			return false;

		});	


		$("#submitmsg8").click(function(){	

			$.post("tutorlog.php", {text: "Please try to think of more to add to your argument. My suggestions should help you construct a strong argument."});
			unlock();
			return false;

		});	
	

		$("#submitmsg9").click(function(){	

			$.post("tutorlog.php", {text: "Let's try to add a few more pieces to your argument to make it really stong, and then we'll move on. Try to use my suggestions to help you think of what to add."});
			unlock();
			return false;

		});	

		$("#submitmsg10").click(function(){	

			$.post("tutorlog.php", {text: "Please try to think of just a little more to your argument. My suggestions should help you come up with a few more things."});
			unlock();
			return false;

		});	

		$("#submitmsg12").click(function(){	

			$.post("tutorlog.php", {text: "Can you try adding at least just one more thing? We're very close to a strong argument now."});
			unlock();
			return false;

		});

		$("#submitmsg13").click(function(){	

			$.post("tutorlog.php", {text: "I'm sorry, I didn't seem to get that sentence. Please enter it again."});
			unlock();
			return false;

		});

		$("#submitmsg14").click(function(){	

			$.post("tutorlog.php", {text: "I'm sorry, I seem to be having trouble answering your questions. Can you try asking about something else?"});
			unlock();
			return false;

		});

		$("#submitmsg15").click(function(){	

			$.post("tutorlog.php", {text: "Are you still there? Please keep trying to add to your argument."});
			unlock();
			return false;

		});

		$("#submitmsg16").click(function(){	

			$.post("tutorlog.php", {text: "What other questions can you ask about reviewing information from the lesson?"});
			unlock();
			return false;

		});

		$("#submitmsg17").click(function(){	

			$.post("tutorlog.php", {text: "What other questions can you ask about definitions or basic information from the lesson?"});
			unlock();
			return false;

		});

		$("#submitmsg18").click(function(){	

			$.post("tutorlog.php", {text: "What other questions can you ask that connect all of the lesson material to the idea that some women are at increased genetic risk?"});
			unlock();
			return false;

		});

		$("#submitmsg19").click(function(){	

			$.post("tutorlog.php", {text: "What other questions can you ask that relate the different pieces of information from the lesson to the concept of increased risk due to genetic mutations?"});
			unlock();
			return false;

		});

		$("#submitmsg20").click(function(){	

			$.post("tutorlog.php", {text: "Can you ask some more questions that ask for definitions or ask about additional basic information? Questions that start with what or who work best."});
			unlock();
			return false;

		});

		$("#submitmsg21").click(function(){	

			$.post("tutorlog.php", {text: "Can you ask some more questions that connect the processes involved in genetic risk? Questions that start with why or how work best."});
			unlock();
			return false;

		});

		$("#submitmsg11").click(function(){	

			$.post("tutorlog.php", {text: "I'm sorry, I don't seem to have an answer for that question. What else can you ask?"});
			unlock();
			return false;

		});

		$("#submitmsg5").click(function(){	

			var clientmsg = $("#feedback5").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback5").attr("value", "");
			unlock();
			return false;

		});	
	
		$("#submitmsg6").click(function(){	

			var clientmsg = $("#feedback6").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback6").attr("value", "");
			unlock();
			return false;

		});	
	
		$("#submitmsg7").click(function(){	

			var clientmsg = $("#feedback7").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedback7").attr("value", "");
			unlock();
			return false;

		});	


		$("#submitmsgA").click(function(){	

			var clientmsg = $("#feedbackA").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackA").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgB").click(function(){	

			var clientmsg = $("#feedbackB").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackB").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgC").click(function(){	

			var clientmsg = $("#feedbackC").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackC").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgD").click(function(){	

			var clientmsg = $("#feedbackD").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackD").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgE").click(function(){	

			var clientmsg = $("#feedbackE").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackE").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgF").click(function(){	

			var clientmsg = $("#feedbackF").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackF").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgG").click(function(){	

			var clientmsg = $("#feedbackG").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackG").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgH").click(function(){	

			var clientmsg = $("#feedbackH").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackH").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgI").click(function(){	

			var clientmsg = $("#feedbackI").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackI").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgJ").click(function(){	

			var clientmsg = $("#feedbackJ").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackJ").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgK").click(function(){	

			var clientmsg = $("#feedbackK").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackK").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgL").click(function(){	

			var clientmsg = $("#feedbackL").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackL").attr("value", "");
			unlock();
			return false;

		});

		$("#submitmsgM").click(function(){	

			var clientmsg = $("#feedbackM").val();
			$.post("tutorlog.php", {text: clientmsg});
			$("#feedbackM").attr("value", "");
			unlock();
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


		function unlock(){

			$.post("unlock.php");

		}
			

		setInterval (loadLog, 2500);	//Reload file every 2500 ms or x ms if you w
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