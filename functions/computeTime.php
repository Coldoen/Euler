<?php 
//Code from https://www.geeksforgeeks.org/measuring-script-execution-time-in-php/
function computeTime($start_time){

$end_time = microtime(true); 
  
$execution_time = ($end_time - $start_time); 
  
return number_format($execution_time, 3, ".", " ");
}
