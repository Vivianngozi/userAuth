<?php
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
 
$email = $_POST['email'];
$password = $_POST['password'];

$file = file_get_contents("../storage/users.csv");
If(!strstr($file, "$email||$password"))
{
// echo "Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again.";
echo "<script>alert('Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again.')</script>";
header("location:../forms/login.html");

}
else
{
header("location:../dashboard.php");

}
}


// echo "HANDLE THIS PAGE";

