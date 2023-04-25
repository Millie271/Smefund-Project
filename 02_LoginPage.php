
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>
<body class="container">
    <div class="login_form h-100 d-flex align-items-center" id="login_form">
        <div class="row w-100">
            <div class="col-sm-5 h-100">
                <img src="photo_2023-03-28_11-13-46.jpg" alt="">
                <h1>Login to your account</h1>
            </div>
            <div class="col-sm-7 h-100">
                <form action="functions/login.php" method="post" class="m-auto">
                    <?php
                        if(isset($_GET['success'])){
                            echo "<div class='alert alert-success'>{$_GET['success']}</div>";
                        }
                    ?>
                    <?php
                        if(isset($_GET['error'])){
                            echo "<div class='alert alert-danger'>{$_GET['error']}</div>";
                        }
                    ?>
                    <div class="col-sm-12 d-flex justify-content-around">
                        <img src="SMEFund logo.png" alt="logo" class="m-auto" align-items="left">
                    </div>

                    <h2 class="text-center">Welcome back Millie</h2>
                    <p class="text-center">Enter the details below to continue your application</p>
                    <div class="form-group">
                        <label for="username">ID Number</label>
                        <input type="number" name="username" id="username" class="form-control" placeholder=" e.g. 37925382  " required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                        <a href="04_ApplicationDetails.html"><input type="submit" value="Login" class="btn btn-primary w-100">
                        </a>
                    
                        </div>
                    <div class="form-group">
                        <p>Not registered ? <a href="03_AccountPage.php">Create account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>


