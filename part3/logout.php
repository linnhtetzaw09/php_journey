<?php


// session_destroy();

// unset($_SESSION['email']);
// unset($_SESSION['password']);

// if(isset($_SESSION['email']) && !isset($_SESSION['password'])){
//     header("Location:signin.php");
// }

include_once "sessionconfig.php";

unsetSession('email');
unsetSession('password');

if(authFailed()){
    redirectTo('signin.php');
}


?>