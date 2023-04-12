<?php
<<<<<<< HEAD

$servername = "185.27.134.136";
$username = "epiz_33846110";
$passsword = "f2wZ0OA6HB4W";
$database = "epiz_33846110_myinfo";

=======
$host = "localhost";
$user = "root";
$password = "";
$database = "myinfo";
$con = mysqli_connect('localhost','root');
>>>>>>> 1a903abcda64a4a658bd4f548d921a1de165e367

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
<<<<<<< HEAD
values ('$name' , '$email' , '$subject' , '$message' )";

=======
values ('$name' , '$email' , '$subject' , '$message' ) ";
>>>>>>> 1a903abcda64a4a658bd4f548d921a1de165e367
echo"$query";
mysqli_query($con,$query);
?>
