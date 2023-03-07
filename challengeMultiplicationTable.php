<?php

// multiplication table 
// $ans = "xyz"; //return the correct value in this string
// $user_response = (int)readline("Give number");

// (int)$i = 1;
// while ($i <= 10){
//     $ans = $user_response * $i;
//     echo strval($ans). " ";
//     $i++;
// }

$i = 10; 
$k=1;
$ans = "";
$num =(int)readline("Give number");
while($i>0)
{
  $answer = $num*$k;
  echo "$num x $k  = $answer\n";
  $ans .=  strval($answer)." "; // like python append for php strings
  $k++;
  $i--;
}
?>