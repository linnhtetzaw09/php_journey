<?php

ini_set('display_errors', 1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $getemail = textFilter($_POST['email']);
    $getpassword = md5(textFilter($_POST['password']));

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

        $stmt->bindParam(":email", $bindemail);
        $stmt->bindParam(":password", $bindpassword);

        $bindemail = $email;
        $bindpassword = $password;

        $stmt->execute();

        echo $stmt->rowCount() . "<br/>";

        // formatPrint($stmt->fetch());    // result 1 from first row
        // formatPrint($stmt->fetch(PDO::FETCH_ASSOC));    // result 1 from first row
        // formatPrint($stmt->fetch(PDO::FETCH_OBJ));    // result 1 from first row
        // formatPrint($stmt->fetchAll());    // all results
        // formatPrint($stmt->fetchAll(PDO::FETCH_ASSOC));    // all results
        // formatPrint($stmt->fetchAll(PDO::FETCH_OBJ));    // all results


        if($stmt->rowCount() == 0){
            echo "No Data";

            redirectTo('signin.php');
        }else{

            // echo "has data";

            setSession('email',$bindemail);
            setSession('password',$bindpassword);

            redirectTo('index.php');  // change path
        }

    } catch (PDOException $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>
