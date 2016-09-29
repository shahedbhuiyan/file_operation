<?php
	// read a file
	$my_file = 'text.txt';
	$handle = fopen($my_file, 'r') or die('Cannot open file:  '.$my_file); //implicitly creates file
	$data = fread($handle,filesize($my_file));
	print $data;
	fclose($handle);
	echo "<br>";

	//write a file

	$my_file = 'text.txt';
	$handle = fopen($my_file, "w") or die('Cannot open file:  '.$my_file);
	$data = 'THe said the arson charge, coupled with a hate crime enhancement under Florida law, carries a sentence of up to 30 years in prison. The fire was set late on Sunday on the 15th anniversary of the September 11, 2001, attacks. The blaze also coincided with the Muslim holiday Eid al-Adha.';
	fwrite($handle, $data);

	//https://davidwalsh.name/basic-php-file-handling-create-open-read-write-append-close-delete