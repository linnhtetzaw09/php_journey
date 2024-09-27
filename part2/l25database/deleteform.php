<?php

ini_set('display_errors', 1);

//=> PDO

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "L!nhtetz@w492OO2";
$dbname = "phpone";


// DB connect
try{
    $connect = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $connect->prepare("SELECT id,name,email FROM users");
    $stmt->execute();

    // while($row = $stmt->fetch()){
    //     echo "ID : ".$row['id']. " Name : ".$row['name']. " Email : ".$row['email']. "<br/>";
    // }

}catch(PDOException $e){
    echo "Error Found : ". $e->getMessage();
}

if(isset($_POST['submit'])){

    $qry = $connect->prepare("DELETE FROM users WHERE id=:id");
    $qry->bindParam(":id",$id);

    $id = $_POST['submit'];
    $qry->execute();

    echo $qry->rowCount(). "Delete Successfully";

    $qry = null;
    $connect = null;

    // Redirect by PHP
    $currentpage = $_SERVER['PHP_SELF'];
    header("Location:$currentpage");
    exit;

    // Redirect by js
    echo "<script type='text/javascript'>
        //method 1
        //window.location.href = window.location.href;

        //method 2
        //window.location.replace(window.location.href);

        //method 3
        //window.location.assign(window.location.href);

    </script>";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">Delete Form</h3>

            <table class="table border table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    while ($row = $stmt->fetch()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];

                        echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$name</td>";
                            echo "<td>$email</td>";
                            echo "<td><form action='' method='post'>
                                <button type='submit' name='submit' id='submit' class='btn btn-danger btn-sm rounded-0' value='$id'>Delete</button>
                            </form></td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>

        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
