<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);


}
function registerUser($username, $email, $password){
    //save data into the file
    // $file = "./storage/users.csv";
    // $file_open = fopen($file,'a');
    // if(isset($_POST["submit"])){
    //     if(isset($username) & isset($email) & isset($password)){
            
    //     }
    // }
    

    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
$file = file_get_contents("../storage/users.csv");
$string = "$username||$email" || $password;
if(!empty($file)|| !empty($string))
{
$myFile = "../storage/users.csv";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$username||$email||$password\n";
Fwrite($fh, $stringData);
echo "<script>alert('your Registration Information Successfully Inserted.')</script>";
Fclose($fh);
header("location:../forms/login.html");
}
else
{
echo "Sorry the name: $username and email: $email is already in database. Please use defrent name & email.";
}
}
    
    // echo "OKAY";

// echo "HANDLE THIS PAGE";


?>