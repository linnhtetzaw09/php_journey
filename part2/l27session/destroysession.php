<?php

session_start();

// => Single Destroy Session
// unset($_SESSION['idxcount']);
// echo "Session deleted successfully";

// => All Destroy Session
session_destroy();
echo "Session deleted successfully";


?>

