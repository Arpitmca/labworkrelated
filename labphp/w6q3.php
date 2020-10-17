<?php 
// PHP program to show 
// standard type casting 

$a = 1; 
var_dump($a); 

// int to float 
$a = (float) $a; 
var_dump($a); 

// float to double 
$a = (double) $a; 
var_dump($a); 

// double to real 
$a = (real) $a; 
var_dump($a); 

// real to int 
$a = (int) $a; 
var_dump($a); 

// int to integer 
$a = (integer) $a; 
var_dump($a); 

// integer to bool 
$a = (bool) $a; 
var_dump($a); 

// bool to boolean 
$a = (boolean) $a; 
var_dump($a); 

// boolean to string 
$a = (string) $a; 
var_dump($a); 

// string to array 
$a = (array) $a; 
var_dump($a); 

// array to object 
$a = (object) $a; 
var_dump($a); 

// object to unset/NULL 
$a = (unset) $a; 
var_dump($a); 
?> 