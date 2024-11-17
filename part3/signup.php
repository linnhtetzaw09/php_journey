

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Form</title>
    <link href="signupstyle.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">

        <div id="dotbox" class="dotbox">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="content">

            <form id="form" action="./registerfunction.php" method="post" enctype="multipart/form-data">

                <h1>Register With Us</h1>

                <div class="page">
                    <div class="form-group">
                        <label for="email">Security :</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        <div>
                            <input type="radio" name="newsletter" id="agree" class="form-check-input" value="1" checked>
                            <label for="agree" class="form-check-label">I agree to get newsletter.</label>
                            <br/>
                            <input type="radio" name="newsletter" id="noagree" class="form-check-input" value="0">
                            <label for="noagree" class="form-check-label">I don't agree to get newsletter.</label>
                        </div>
                    </div>
                </div>


                <div class="page">
                    <div class="form-group">
                        <label for="name">Personal Info :</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last Name">
                        <div>
                            <label for="profile">Profile Picture</label>
                            <input type="file" name="profile[]" id="profile" class="form-controls" />
                        </div>
                    </div>
                </div>

                <div class="page">
                    <div class="form-group">
                        <label for="dob">Date Of Birth :</label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>
                </div>

                <div class="page">
                    <div class="form-group">
                        <label for="phone">Contact Info :</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address Detail">
                        <div>
                            <input type="checkbox" name="documents[]" id="docnrc" class="form-check-input" value="nrc">
                            <label for="docnrc" class="form-check-label">I have NRC.</label>
                            <br/>
                            <input type="checkbox" name="documents[]" id="docpassport" class="form-check-input" value="passport">
                            <label for="docpassport" class="form-check-label">I have Passport.</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <button type="button" id="prevbtn" class="btn" onclick="gonow(-1)">Previous</button>
                    <button type="button" id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
                </div>

                <p>Already register ? <a href="signin.php">Signin Here</a></p>

            </form>

            <div class="result-container">

            </div>
            
        </div>

    </div>

    <script src="signup.js" type="text/javascript"></script>
    
</body>
</html>


