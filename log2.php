<?php
session_start();
if(isset($_SESSION['name'])){

	date_default_timezone_set("EST");

	$text = $_POST['text'];
     
	$fp = fopen("log/log2.html", 'a');
	$time = time();
	fwrite($fp, "<div class='msgln'>(".date("g:i:s A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
   	fclose($fp);
	$bp = fopen("log/backup.html", 'a');
	fwrite($bp, "<div class='msgln'>(".date("g:i:s A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($bp);
}
?>