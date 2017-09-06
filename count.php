<?php

	$counts = file_get_contents('log/count.html');

	file_put_contents('log/counted.html',$counts);

?>