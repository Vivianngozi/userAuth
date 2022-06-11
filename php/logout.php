<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page

*/




// session_start();
// unset($_SESSION["fullname"]);
// unset($_SESSION["email"]);
// unset($_SESSION["password"]);

session_destroy();
header("location:../forms/login.html");


}
 echo logout();


// echo "HANDLE THIS PAGE";
?>