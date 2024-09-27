<!-- <?php

    $name = $email = $password = $city = $favcolor = $bio = "";
    $nameerr = $emailerr = $pwerr = $cityerr = $colorerr = $bioerr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['name'])){
            $nameerr = "Name is required";
        }else{
            $name = textfilter($_POST['name']);
        }

        if(empty($_POST['email'])){
            $emailerr = "Email is required";
        }else{
            $name = textfilter($_POST['email']);
        }

        if(empty($_POST['password'])){
            $pwerr = "Password is required";
        }else{
            $name = textfilter($_POST['password']);
        }

        if(empty($_POST['city'])){
            $cityerr = "City is required";
        }else{
            $name = textfilter($_POST['city']);
        }

        if(empty($_POST['favcolor'])){
            $colorerr = "Color is required";
        }else{
            $name = textfilter($_POST['favcolor']);
        }

        if(empty($_POST['bio'])){
            $bioerr = "Bio is required";
        }else{
            $name = textfilter($_POST['bio']);
        }

    }


    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Font Handling Exercise 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

    <div class="container mt-3">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            
            <!-- Name Field -->
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <span class="error">* <?php echo $nameerr;   ?></span>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            </div>

            <!-- Email Field -->
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <span class="error">* <?php echo $emailerr;   ?></span>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
            </div>

            <!-- Password Field -->
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <span class="error">* <?php echo $pwerr;   ?></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
            </div>

            <!-- City Field -->
            <div class="form-group mb-3">
                <label for="city">City</label>
                <span class="error">* <?php echo $cityerr;   ?></span>
                <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city">
            </div>

            <!-- Favorite Color Radio Buttons -->
            <div class="form-group mb-3">
                <label>Favorite Color</label>
                <span class="error">* <?php echo $colorerr;   ?></span>
                    <input type="radio" name="favcolor" id="favrd" class="form-check-input" value="Red Color">
                    <label for="favrd" class="form-check-label">Red</label>
                    <input type="radio" name="favcolor" id="favgn" class="form-check-input" value="Green Color">
                    <label for="favgn" class="form-check-label">Green</label>
                    <input type="radio" name="favcolor" id="favbl" class="form-check-input" value="Blue Color">
                    <label for="favbl" class="form-check-label">Blue</label>
            </div>

            <!-- Bio Field -->
            <div class="form-group mb-3">
                <label for="bio">Bio</label>
                <span class="error">* <?php echo $bioerr;   ?></span>
                <textarea name="bio" id="bio" class="form-control" rows="5" placeholder="Enter your bio"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
    
        </form>

    </div>
    
</body>
</html>


<?php

echo "<h2>My information are ... </h2>";
echo "Name is $name <br/>";
echo "Email is $email <br/>";
echo "Password is $password <br/>";
echo "City is $city <br/>";
echo "My fav color is $favcolor <br/>";
echo "Bio is $bio <br/>";


?>