<?php

class Button
{
public $color;

public function setColor($color)
{
$this->color = $color;
}

public function getColor()
{
return 'orange';
}

/**
* Increase amount of pageviews
*
*take value and add 1 to it.
*
*@param in $currentCount
*
*@return int
*/
public function increasePageview($currentCount)
{
return $currentCount + 1;
}

/**
*divide clicks by viwes in order to get
*the current conversion rate
*
*@param in $clicks
*@param in $views
*
*@return float
*/
public function calculateConversionRate($clicks, $views)
{
return $clicks / $views;
}
}

$my_file = 'colorcount.csv';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = $currentCount;
fwrite($handle, $data);