<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if ($_SERVER(['REQUEST_METHOD']) === "POST"){
    $getfirstname = textFilter($_POST['firstname']);
    $getlastname = textFilter($_POST['lastname']);
    $getemail = textFilter($_POST['email']);
    $getpassword = textFilter($_POST['password']);
    $getdob = textFilter($_POST['dob']);
    $getphone = textFilter($_POST['phone']);
    $getaddress = textFilter($_POST['address']);
    // $getdocuments = textFilter($_POST['documents']);
    $getnewsletter = textFilter($_POST['newsletter']);

    echo $getfirstname;
    echo $getlastname;
    echo $getemail;
    echo $getpassword;
    echo $getdob;
    echo $getphone;
    echo $getaddress;
    // echo $getdocuments;
    echo $getnewsletter;

    if($getemail && $getpassword){

        try{

            $stmt = $connect->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,newsletter) VALUE (:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:newsletter)");
            
            $stmt->bindParam(":profile",$bindprofile);
            $stmt->bindParam(":firstname",$bindfirstname);
            $stmt->bindParam(":lastname",$bindlastname);
            $stmt->bindParam(":email",$bindemail);
            $stmt->bindParam(":password",$bindpassword);
            $stmt->bindParam(":dob",$binddob);
            $stmt->bindParam(":phone",$bindphone);
            $stmt->bindParam(":address",$bindaddress);
            $stmt->bindParam(":newsletter",$bindnewsletter);

            // $bindprofile = $getprofile;
            $bindfirstname = $getfirstname;
            $bindlastname = $getlastname;
            $bindemail = $getemail;
            $bindpassword = $getpassword;
            $binddob = $getdob;
            $bindphone = $getphone;
            $bindaddress = $getaddress;
            // $binddocuments = $getdocuments;
            $bindnewsletter = $getnewsletter;

            if ($stmt->execute()){
                // session store
                setSession('email',$bindemail);
                setSession('password',$bindpassword);
                // redirect to profile or webpage
                redirectTo('https://google.com');
            }else{
                echo "Try again!";
            }

        } catch(PDOException $e){
            echo "Error found : " . $e->getMessage();
        }

        $connect = null;

    }

}



function textFilter($data){

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;

}





?>

<!-- CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100),
    documents VARCHAR(100)
);

DESC users; -->