<!DOCTYPE html>
<html lang="en">
<head>
    <title>Font Handling Exercise 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container mt-3">

        <form action="displayhandlingex1.php" method="POST">
            
            <!-- Name Field -->
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            </div>

            <!-- City Field -->
            <div class="form-group mb-3">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Submit</button>
    
        </form>

    </div>
    
</body>
</html>
