<?php
// code that check if the number is a odd or even
// 0 for even || 1 for odd

//  base variables
$temp = -1;
$user_post = readline("Give me a number :");
settype($user_post, "integer");

if ($user_post % 2 == 0){
    $temp = 0; 
}
elseif($user_post % 2 == 1) {
    $temp = 1;
}

echo $temp. "\n";

?>