<?php

$string = "value1,value2,value3";

$array = explode(',', $string);

var_dump($array);

$assArray=array(
	'name'=>'Yolo',
	'hungry'=> true);
echo '<br>';
var_dump($assArray);

$assArray['name'];
$array[0];