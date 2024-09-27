<?php

ini_set('display_errors', 1);

//=> MySQLi Object Oriented
// DB connect
$connect = new mysqli("localhost:3307", "root", "L!nhtetz@w492OO2", "phpone");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

echo "Connected successfully";

// Fetching users from the database
$sql = "SELECT id, name, email, password FROM users";
$results = $connect->query($sql);

echo "$results->num_rows";

if (isset($_POST['submit'])) {
    // Prepare and bind parameters for updating the user
    $stmt = $connect->prepare("UPDATE users SET name=?, email=?, password=? WHERE id=?");
    $stmt->bind_param('sssi', $name, $email, $password, $id);

    // Get form data
    $id = $_POST['userid'];
    $name = textfilter($_POST['name']);
    $email = textfilter($_POST['email']);
    $password = textfilter($_POST['password']);

    // Execute the prepared statement
    $stmt->execute();

    echo "Updated Successfully";

    // Close the statement and connection
    $stmt->close();
    $connect->close(); 
}

// Sanitize function
function textfilter($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">Update Form</h3>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                <div class="form-group mb-3">
                    <label for="userid">User ID</label>
                    <select name="userid" id="userid" class="form-control">
                        <!-- <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option> -->

                        <?php

                            if($results->num_rows > 0){
                                while($rows = $results->fetch_assoc()){
                                    $id = $rows['id'];
                                    echo "<option value='$id'>$id</option>";
                                }
                            }else{
                                echo "<option value=''>No Data</option>";
                            }

                        ?>

                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                </div>

                <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Update">

            </form>


        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
