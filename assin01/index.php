<?php

$num1=5;
$num2=6;
$num3=7;

if($num1>$num2 && $num1>$num3){
    echo "$num1 is the largest number";
}
elseif($num2>$num1 && $num2>$num3){
    echo "$num2 is the largest number";
}
else{
    echo "$num3 is the largest number";
}

 
$celsius = 40;
$fahrenheit = 90;

if ($temperature = $celsius) {
    $result = $temperature*9/5 + 32;
    echo "Your temperature in fahrenheit is: " . $result;
} else if ($temperature = $fahrenheit) {
    $result = ($temperature-32)*5/9;
    echo "Your temperature in celsius is: " . $result;
} else {
    echo "Please select temperature";
}




?>