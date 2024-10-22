<?php 


ini_set('display_errors',1);

if(isset($_POST['submit'])){

    $uploadDir = 'assets/';
    $fileNames = $_FILES['profile']['name'];
    $filetmps = $_FILES['profile']['tmp_name'];
    $fileErrors = $_FILES['profile']['error'];
    // echo "<pre>".print_r($fileErrors,true)."</pre>";

    foreach($fileErrors as $idx=>$fileError){
        // echo $idx . "<br/>";    // 0 to 2
        // echo $fileError. "<br/>";   //

        // UPLOAD_ERR_OK, mean there is no errors
        if($fileError === UPLOAD_ERR_OK){

            $getFileName = $fileNames[$idx];
            $uploadFile = $uploadDir.basename($getFileName);
            $getFiletmp = $filetmps[$idx];

            if(move_uploaded_file($getFiletmp,$uploadFile)){
                echo "Files uploaded successfully";
            }else{
                echo "File upload fail";
            }
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head> <!-- Removed extra closing head tag -->
<body>

    <!-- <div class="col-md-6 mx-auto mt-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile[]" id="profile1" class="form-control">
                <input type="file" name="profile[]" id="profile2" class="form-control">
                <input type="file" name="profile[]" id="profile3" class="form-control">
            </div>

            <input type="submit" name="submit" class="btn btn-primary rounded-0 float-end" value="Upload">

        </form>

    </div> -->

    <div class="col-md-6 mx-auto mt-5">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile[]" id="profile1" class="form-control" multiple>
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