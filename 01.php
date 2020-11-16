<?php

$input = fopen("01-input.txt", "r") or die("Unable to open file!");
$input_string = fread($input, filesize ("01-input.txt"));



//echo $input_string;

$num_of_pos = substr_count($input_string, "(");
$num_of_neg = substr_count($input_string, ")");
//echo $num_of_neg;
//echo $num_of_pos;
$floor_num =  $num_of_pos - $num_of_neg;
echo "floor number is " . $floor_num;



fclose($input);



?>