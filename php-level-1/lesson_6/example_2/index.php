<?php
	function debug_log($msg) {
		$time = date('H:i:s');
		$f = fopen('log.txt', 'a+');
		fputs($f, "$time - $msg\r\n");
		fclose($f);
	}

	if (6 < 5) {
		debug_log('true');
	} else {
		debug_log('false');
	}
