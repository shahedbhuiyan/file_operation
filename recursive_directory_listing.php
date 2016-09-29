<?php
  function ListIn($dir, $prefix = '') {
  $dir = rtrim($dir, '\\/');
  $result = array();

    $h = opendir($dir);
    while (($f = readdir($h)) !== false) {
      if ($f !== '.' and $f !== '..') {
        if (is_dir("$dir/$f")) {
          $result = array_merge($result, ListIn("$dir/$f", "$prefix$f/"));
        } else {
          $result[] = $prefix.$f;
        }
      }
    }
    closedir($h);

  return $result;
}
echo "<pre>";
print_r(ListIn("/home/systemdown/Downloads"));