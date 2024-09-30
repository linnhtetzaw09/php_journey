<?php

// => Note :: Session store on Server (Super Global Variable) 

session_start();

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] = 1;
}

// echo "Session set successfully";



?>
