<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection Successful";
}
else{
    echo"No Connection";
}

mysqli_select_db($con,'myinfo');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$query = " insert into message (name , email , subject , message)
values ('$name' , '$email' , '$subject' , '$message' )";

echo"$query";
mysqli_query($con,$query);
?>
