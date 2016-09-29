<?php
/*
	echo "The RecursiveDirectoryIterator";
	echo "<pre>";
	$iterator = new RecursiveDirectoryIterator('.');
	$filter = new RegexIterator($iterator->getChildren(), '/test$/');
	$filelist = array();
	foreach($filter as $entry) {
	    $filelist[] = $entry->getFilename();
	}
	print_r($filelist);

	echo "<br>";
	*/

	echo "<pre>";
	echo "Using GlobIterator() ";


	$iterator = new GlobIterator("te*");
	$filelist = array();
	foreach($iterator as $entry) {
	    $filelist[] = $entry->getFilename();
	}
	print_r($filelist);