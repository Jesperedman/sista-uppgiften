<?php
require_once('randgenerator.php');

// Open the file for reading

$fp = fopen("counterlog.txt", "r");


// Get the existing count

$count = fread($fp, 1024);



// Close the file

fclose($fp);



// Add 1 to the existing count

$count = $count + 1;


// Reopen the file and erase the contents

$fp = fopen("counterlog.txt", "w+");



// Write the new count to the file

fwrite($fp, $count);



// Close the file

fclose($fp);

?> 