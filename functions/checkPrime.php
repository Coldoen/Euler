<?php 
function checkPrime($num)
{
   if ($num == 1)
   return false;
   for ($j = 2; $j <= $num/2; $j++)
   {
      if ($num % $j == 0)
      return false;
   }
   return true;
}