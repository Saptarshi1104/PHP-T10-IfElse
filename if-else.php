<?php
$a = 65;
$b = 9;
if($a > 78){
    echo "A is greater than 78" . "<br>";
}
else{
    echo "A is not greater than 78" . "<br>";
}

$age = 54;

// If Else Ladder
if($age>18){
    echo "Your age is more than 18" . "<br>";
}
elseif($age>13){
    echo "Your age is more than 13" . "<br>";
}
else{
    echo "Your age is less than 13" . "<br>";
}

$age = 24;

// This if condition is different
if($age>18){
    echo "Your age is more than 18" . "<br>";
}
// This if-else condition is different
if($age>13){
    echo "Your age is more than 13" . "<br>";
}
else{
    echo "Your age is less than 13" . "<br>";
}

// Quiz-1: Create an if else ladder using more than one elseif 
$score = 346;
if($score>400){
    echo "You have scored outstanding" . "<br>";
}
elseif($score>300){
    echo "You have scored well" . "<br>";
}
elseif($score>200){
    echo "You have done good, but you can improve further" . "<br>";
}
elseif($score>100){
    echo "Not a very good score" . "<br>";
}
else{
    echo "Failure" . "<br>";
}

//Quiz-2: Write a program to allow a driver to drive only when his age is greater than or equal to 25 and less than or equal to 65
$driver_age = 66;
if($driver_age>=25 && $driver_age<=65){
    echo "You are allowed to drive";
}
else{
    echo "You are not allowed to drive";
}
?>