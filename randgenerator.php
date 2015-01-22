<?php
// This is where it finds wich index should be at random.
$randomIndex = rand(0,2);

//Set the index value of the different options.
$options = array(
	0 => 'red',
	1 => 'green',
	2 => 'orange'
);

//Defines what variable is going to get the function of being randomly selected.
$color = $options[$randomIndex];