
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css">
    <title>Create Account</title>
</head>
<body class="container">
    <div class="login_form h-100 d-flex align-items-center" id="login_form">
        <div class="row w-100">
            <div class="col-sm-5 h-100">
                <img src="photo_2023-03-28_11-13-46.jpg" alt="">
                <h1>Register to create an account</h1>
            </div>
            <div class="col-sm-7 h-100">
            
                <form action="functions/signup.php" method="post" class="m-auto">

                    <?php 
                    if(isset($_GET['error'])){
                         echo "<div class='alert alert-danger'>{$_GET['error']}</div>"; 
                        }

                    ?> 


                    <div class="col-sm-12 d-flex justify-content-around">
                        <img src="SMEFund logo.png" alt="logo" class="m-auto" align-items="left">
                    </div>

                    <h2 class="text-center">Welcome to SME Fund Kenya </h2>
                    <p class="text-center">Fill in the details to create your account</p>
                    <div class="row" id="no-shadow">
                        <div class="form-group col-sm-6">
                            <label for="username">Full Name</label>
                            <input type="username" name="username" id="username" class="form-control" placeholder=" e.g Milly Cheptoo ">
    
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="identification">ID Number</label>
                            <input type="number" name="identification" id="identification" class="form-control" placeholder=" e.g. 37925382  ">
                        </div>
                    </div>

                    <div class="row" id="no-shadow">
                        <div class="form-group col-sm-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="confirm password">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="  ">
                        </div>
                    </div>
                    <small class="terms " >
                        By continuing you agree to the SME Fund Kenya Terms and Conditions of
                        use
                    </small>
                    <div class="form-group mt-2">
                        <a href="04_ApplicationDetails.html">
                        <input type="submit" value="Create Account" class="btn btn-primary w-100"></a>
                    </div>
                    
                    <div class="form-group">
                        <p>Already registered? <a href="02_LoginPage.php">Login instead</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>