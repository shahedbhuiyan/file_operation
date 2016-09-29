<?php
	echo "using opendir() function ";
	$filelist = array();
	if ($handle = opendir(".")) {
		//print_r(readdir($handle)); // it fetches everytime a single file
	    while ($entry = readdir($handle)) {
	        if (strpos($entry, "te") === 0) {
	            $filelist[] = $entry;
	        }
	    }
	    closedir($handle);
	}
	echo "<pre>";
	print_r($filelist);

	echo "Using scandir() function ";

	$entries = scandir(".");
	//print_r($entries); // it fetches all of the file and directories
	$filelist = array();
	foreach($entries as $entry) {
	    if (strpos($entry, "te") === 0) {
	        $filelist[] = $entry;
	    }
	}

	print_r($filelist);

	echo "Using SPL iterator ";
	$iterator = new FilesystemIterator(".");
	$filelist = array();
	foreach($iterator as $entry) {
	    if (strpos($entry->getFilename(), "te") === 0) {
	        $filelist[] = $entry->getFilename();
	    }
	}
	print_r($filelist);

	echo "Using Regex Iterator";
	$iterator = new FilesystemIterator(".");
	$filter = new RegexIterator($iterator, '/t.(php|dat)$/');
	$filelist = array();
	foreach($filter as $entry) {
	    $filelist[] = $entry->getFilename();
	}
	print_r($filelist);


	