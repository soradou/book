<?php
$conn=mysqli_connect("localhost","root","","log");
if($conn){
    //echo "Connected";
}
else{
    echo "Failed";
}

$username=$_POST['username'];
$password=$_POST['password'];

$data = "INSERT INTO sig VALUES('','$username','$password')";
$check = mysqli_query($conn,$data);
if($check){
    echo "Data sended";
}
else{
    echo "Data not send";
}

?>