<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo 'Connection Successfull';
}else{
    echo 'No Connection';
}

// connect with data base
mysqli_select_db($con, "contactdetail");

// acess method which was written in index.php's form tag

// create variable $user
$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// querry insert
$query = " insert into contactdetail(user , email , phone , message)
values ('$user', '$email', '$phone', '$message') ";

mysqli_query($con, $query);

echo '$query'




?>