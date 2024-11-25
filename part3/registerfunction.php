<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if ($_SERVER(['REQUEST_METHOD']) === "POST"){
    $getfirstname = textFilter($_POST['firstname']);
    $getlastname = textFilter($_POST['lastname']);
    $getemail = textFilter($_POST['email']);
    $getpassword = md5(textFilter($_POST['password']));
    $getdob = textFilter($_POST['dob']);
    $getphone = textFilter($_POST['phone']);
    $getaddress = textFilter($_POST['address']);
    // $getdocuments = textFilter($_POST['documents']);
    $getnewsletter = textFilter($_POST['newsletter']);

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;
    // // echo $getdocuments;
    // echo $getnewsletter;

    if($getemail && $getpassword){

        try{

            $stmt = $connect->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,newsletter) VALUE (:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:documents,:newsletter)");
            
            $stmt->bindParam(":profile",$bindprofile);
            $stmt->bindParam(":firstname",$bindfirstname);
            $stmt->bindParam(":lastname",$bindlastname);
            $stmt->bindParam(":email",$bindemail);
            $stmt->bindParam(":password",$bindpassword);
            $stmt->bindParam(":dob",$binddob);
            $stmt->bindParam(":phone",$bindphone);
            $stmt->bindParam(":address",$bindaddress);
            $stmt->bindParam(":documents",$binddocuments);
            $stmt->bindParam(":newsletter",$bindnewsletter);

            // handle profile
            $countfiles = count($_FILES['profile']['name']);

            if($countfiles){
                for($x = 0; $x < $countfiles; $x++){

                    $getuniqid = uniqid().'_'.time();
                    $uploadDir = "public/assets/";
                    // $uploadFile = $uploadDir.$getuniqid.basename($_FILES['profile']['name'][$x]);       // assets/BG.jpg

                    $getextension = pathinfo($_FILES['profile']['name'][$x], PATHINFO_EXTENSION);
                    $newfilename = $getuniqid.".".basename($getextension);
                    $uploadFile = $uploadDir.basename($newfilename);       // assets/BG.jpg

                    $uploadSize = $_FILES['profile']['size'][$x];
                    $uploadType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
                    $allowExtension = ["jpg", "jpeg", "png", "gif"];  // corrected "git" to "gif"

                    $errors = [];

                    // check file size
                    // 60000 bit = 60 kb
                    if($uploadSize > 60000){
                        $errors[] = "Sorry, your file size is too large <br/>";
                    }

                    // check file format or extension
                    if(in_array($uploadType, $allowExtension) === false){
                        $errors[] = "Sorry, we only allow JPG, JPEG, PNG, and GIF file types. <br/>";
                    }

                    // upload
                    if(empty($errors) === true){
                        echo "Allowed file size<br/>";

                        // move_uploaded_file(temp, actual path and name)
                        if(move_uploaded_file($_FILES['profile']['tmp_name'][$x], $uploadFile)){
                            $bindprofile = $uploadFile;
                            echo "File Successfully Uploaded";
                        }else{
                            echo "Try Again";
                        }
                    } else {
                        echo "<pre>".print_r($errors,true)."</pre>";
                    }

                    // check extension


                    // check size



                    // upload


                }
            }

            // $bindprofile = $getprofile;
            $bindfirstname = $getfirstname;
            $bindlastname = $getlastname;
            $bindemail = $getemail;
            $bindpassword = $getpassword;
            $binddob = $getdob;
            $bindphone = $getphone;
            $bindaddress = $getaddress;
            $bindnewsletter = $getnewsletter;

            $getdocuments = NULL;

            if(isset($_POST['documents'])){
                $doocs = $_POST['documents'];

                foreach($doocs as $doc){
                    $getdocuments .= $doc.",";
                }
            }

            $binddocuments = $getdocuments;


            if ($stmt->execute()){
                // session store
                setSession('email',$bindemail);
                setSession('password',$bindpassword);
                // redirect to profile or webpage
                // redirectTo('https://google.com');
                redirectTo('public/learningpage/inex.php');
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
    documents VARCHAR(100),
    newsletter TINYINT
);

DESC users; -->