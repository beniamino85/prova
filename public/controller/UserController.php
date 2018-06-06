<?php

include ("../model/User.php");

$users = [];

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password= $_POST["password"];

$user = new User($firstname, $lastname, $username, $password);

/*$user1 = [
  "firstname" => $user->getFirstname(),
  "lastname" => $user->getLastname(),
  "username" => $user->getUsername(),
  "password" => $user->getPassword()
];*/

//$user1 = json_encode($user);

array_push($users, $user->jsonSerialize());
//array_push($users, $lastname);
//array_push($users, $username);
//array_push($users, $password);

//print_r($users);


echo json_encode($users);
