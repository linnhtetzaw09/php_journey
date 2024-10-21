<?php 

// phpinfo();

ini_set('display_errors',1);

// if(isset($_POST['submit'])){
//     // echo "Hi";

//     // $result = $_POST['profile'];
//     // echo $result;   // error

//     $result = $_FILES;
//     // echo $result;
//     echo "<pre>".print_r($result,true)."</pre>";

//     echo $_FILES['profile']['name'] . "<br/>";
//     echo $_FILES['profile']['full_path'] . "<br/>";
//     echo $_FILES['profile']['type'] . "<br/>";
//     echo $_FILES['profile']['tmp_name'] . "<br/>";
//     echo $_FILES['profile']['error'] . "<br/>";
//     echo $_FILES['profile']['size'] . "<br/>";      // show with kilo byte


//     $fileext = explode('.',$_FILES['profile']['name']);
//     echo "<pre>".print_r($result,true)."</pre>";

//     echo $fileext[0]. "<br/>";
//     echo $fileext[1]. "<br/>";


//     $fileName = current(explode('.',$_FILES['profile']['name']));
//     // echo $fileName . "<br/>";

//     $fileExt = end(explode('.',$_FILES['profile']['name']));
//     echo $fileExt . "<br/>";

// }

if(isset($_POST['submit'])){

    $uploadDir = "assets/";
    // $uploadFile = $uploadDir.$_FILES['profile']['name'];       // assets/BG.jpg
    $uploadFile = $uploadDir.basename($_FILES['profile']['name']);       // assets/BG.jpg
    $uploadSize = $_FILES['profile']['size'];
    $uploadType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $allowExtension = ["jpg", "jpeg", "png", "gif"];  // corrected "git" to "gif"
    $errors = [];

    // echo $uploadType;
    // echo $uploadSize;

    // check file already or not
    if(file_exists($uploadFile)){
        $errors[] = "Sorry, file already exists <br/>";
    }

    // check file size
    // 60000 bit = 60 kb
    if($uploadSize > 60000){
        $errors[] = "Sorry, your file size is too large <br/>";
    }

    // check file format
    if(in_array($uploadType, $allowExtension) === false){
        $errors[] = "Sorry, we only allow JPG, JPEG, PNG, and GIF file types. <br/>";
    }

    // upload
    if(empty($errors) === true){
        echo "Allowed file size<br/>";
        // move_uploaded_file(temp, actual path and name)
        if(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadFile)){
            echo "File Successfully Uploaded";
        }else{
            echo "Try Again";
        }
    } else {
        // Corrected $error to $errors
        echo "<pre>".print_r($errors,true)."</pre>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head> <!-- Removed extra closing head tag -->
<body>

    <div class="col-md-6 mx-auto mt-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>

            <input type="submit" name="submit" class="btn btn-primary rounded-0 float-end" value="Upload">

        </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>



<!-- //  bytes to kb
// kilobyte = byte / 1024
// 2048 / 1024 = 2 kb

// kb to Mb
// megabytes = kilobyte / 1024
// 3072 / 1024 = 3 Mb

// Bytes to Mb
//  kilobyte = byte / 2024
//  megabytes = kilobyte / 1024

//  megabytes = byte / 1024 x 1024

//  100,000 / 1024 x 1024 = 1 Mb -->