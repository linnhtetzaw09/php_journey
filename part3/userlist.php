<?php

ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');

if (authFailed()){
    redirectTo('signin.php');
}

try{
    global $connect;

    $stmt = $connect->prepare(("SELECT id,profile,firstname,lastname,email,dob,phone,address FROM users"));
    $stmt->execute();

    formatPrint($stmt->fetchAll());
    
} catch(PDOException $e){
    echo ("Error found : ". $e->getMessage());
}

$connect = NULL;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>

    <div class="container">

        <a href="javascript:void(0);">Create User</a>

        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Phone</th>
                <th>Address</th>
            </thead>
            <tbody>
                <?php while($row = $stmt->fetch()) : ?>

                    <tr>
                        <td><?php echo "{$row['id']}" ?></td>
                        <td>
                            <img src='<?= "{$row['profile']}" ?>' style="width:25px;height:25px;border-radius:50%;" alt="">
                            <?php echo "{$row['firstname']} {$row['lastname']}" ?>
                        </td>
                        <td><?=  "{$row['email']}" ?></td>
                        <td><?=  "{$row['dob']}" ?></td>
                        <td><?=  "{$row['phone']}" ?></td>
                        <td><?=  "{$row['address']}" ?></td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>


