<?php
$conn = mysqli_connect("localhost","root","","log");
if(isset($_POST["register"])){
    $username=$_POST["username"];
    $email = $_POST["email"];
    $password=$_POST['password'];

    // Check if username or email already exists
    $check_user_query = "SELECT * FROM rejt WHERE username = '$username' OR email = '$email'";
    $check_user_result = mysqli_query($conn, $check_user_query);

    if (mysqli_num_rows($check_user_result) > 0) {
        echo "Username/Email Has Already Taken";
    } else {
        // Insert user into database
        $insert_user_query = "INSERT INTO rejt VALUES('','$username','$email','$password')";
        mysqli_query($conn, $insert_user_query);

        echo "Registration Successfull";
    }
}
?>