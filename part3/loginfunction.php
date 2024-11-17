<?php

ini_set('display_errors', 1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $getemail = textFilter($_POST['email']);
    $getpassword = textFilter($_POST['password']);

    echo $getemail;
    echo $getpassword;

    if ($getemail && $getpassword) {
        loginVerify($getemail, $getpassword);
    } else {
        echo "Enter Username & Password";
    }
}

function textFilter($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

function loginVerify($email, $password) {
    // Make sure the global $connect is accessible
    global $connect;

    try {
        // Correct SQL query with fixed column name
        $stmt = $connect->prepare("SELECT email, password FROM users WHERE email = :email AND password = :password");

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

    } catch (PDOException $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>
