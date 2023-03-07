<?php
// challenge making calculator 


// Setting variables 
$num1 = (int)readline("Give the first number : \n");
$num2 = (int)readline("Give the second nuber : \n");
$Operator = (string)readline("Give the operator : \n");

// First echo 
$temp=-76575; 
echo "Number 1 is: $num1\n";
echo "Number 2 is: $num2\n";
echo "Operator is: $Operator\n";

switch($temp) {
    case $Operator === "+";
    $temp = $num1 + $num2. "\n";
    break;

    case $Operator === "-";
    $temp = $num1 - $num2. "\n";
    break;

    case $Operator === "*";
    $temp = $num1 * $num2. "\n";
    break;

    case $Operator === "/";
    $temp = $num1 / $num2. "\n";
    break;

    default:
    echo "ERROR !";
    break;

}

echo "The result of the operation is : ". $temp;

?>