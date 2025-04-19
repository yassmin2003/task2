<?php 
/*
SESSION 1

echo "Yasmine";
print("Yasmine");

$arr=["red" , "yellow"];
print_r($arr); 

$firstName= "Yasmine";
$lastName= "Hamed";
$uniName= "Alex uni";
$depart= "Communication and electronics";

echo $firstName." ".$lastName." ".$uniName." ".$depart;

define("NAME", "YAS");
const X=5;

echo NAME;
echo X;

SESSION 2

$name="Hello from black horse";

echo strtoupper($name);
echo "<br>";
echo strtolower($name);
echo "<br>";
echo strrev($name);
echo "<br>";

$name="***************hello************";
echo trim($name,"*");
echo "<br>";

$name="osama is a programmer and a developer";
echo substr($name , 6 , 8);

*/

// TASK 1
// this code prints name (first + last ) ,age, gpa and university in with diff func
// $firstName ="Yasmine";
// $lastName="Hamed";
// $age=22;
// const gpa =3.5;
// define("university","Alexandria university");
// echo $firstName . " " . $lastName;
// print("<br> $firstName \n $lastName <br>");
// print("$age <br> university <br> gpa ");

// TASK 2
 
$user_age=20;
$role="admin";
if ($user_age<18){
    print("you must be above 18!!");
}
else{
    switch($role){
        case "admin":
            print("full access");
            break;
        case "editor":
            print("edit access");
            break;
        case "viewer":
            print("read only access");
            break;
        default:
            print("access denied");
            break;

    }
}




?>