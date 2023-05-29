<?php
$myfile = fopen("curPage.txt", w) or die("Unable to open file!");
fwrite($myfile, $_GET["curPage"]);
fclose($myfile);
?>