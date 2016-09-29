<?php
$filelist = glob("*.txt"); // search all the .txt files from current directory
echo "<pre>";
print_r($filelist);
echo "<br>";

$filelist = glob("n*");
print_r($filelist);

echo "<br>";

$filelist = glob("d*", GLOB_ONLYDIR);
print_r($filelist);