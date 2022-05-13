<?php

$db = mysqli_connect('localhost', 'root', '', 'cssl');

$username = $_POST['username'];
$password = $_POST['pass'];
$email = $_POST['email'];

$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);


$query = "INSERT INTO `users`( `username`, `password`, `email`) VALUES ('$username', '$hashPassword', '$email')";
mysqli_query($db, $query);




?>