<!DOCTYPE html> 
<html>
 <head>
	<title>End Session</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
 </head>

 <body>

	<?php

	session_start();

	$fp = fopen("log/log.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the session.</i><br></div>"); 
	fclose($fp);

	$newfile = 'data/'. $_SESSION['name'] .'.html';

	$fnewlog = fopen($newfile,'a') or die("can't open file");
	$fcontents = file_get_contents('log/log.html');

	fwrite($fnewlog,$fcontents);

	fclose($fnewlog);

	file_put_contents('log/log.html', null);

	file_put_contents('log/count.html', null);

	file_put_contents('log/counted.html', null);

	file_put_contents('log/tutor.html', null);
	
	session_destroy();
	
	echo 'The session is now ended';


	?>


 </body>
</html>