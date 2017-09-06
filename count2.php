<?php

	$counts = file_get_contents('log/count2.html');

	file_put_contents('log/counted2.html',$counts);

?>