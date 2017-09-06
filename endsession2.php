<!DOCTYPE html> 
<html>
 <head>
	<title>End Session</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
 </head>

 <body>

	<?php

	session_start();

	$fp = fopen("log/log2.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the session.</i><br></div>"); 
	fclose($fp);

	$newfile = 'data/'. $_SESSION['name'] .'.html';

	$fnewlog = fopen($newfile,'a') or die("can't open file");
	$fcontents = file_get_contents('log/log2.html');

	fwrite($fnewlog,$fcontents);

	fclose($fnewlog);

	file_put_contents('log/log2.html', null);

	file_put_contents('log/count2.html', null);

	file_put_contents('log/counted2.html', null);

	file_put_contents('log/tutor2.html', null);

	file_put_contents('log/advance2.html', "stop");
	
	session_destroy();
	
	echo 'The session is now ended';


	?>


 </body>
</html>