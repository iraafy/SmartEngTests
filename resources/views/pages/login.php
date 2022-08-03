<?php
include 'conn.php';
$error = 0;

session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$pass'");

    if (mysqli_num_rows($query) === 1) {
        $_SESSION["login"] = true;
        header("Location: generate.php");
        exit;
    } else {
        $error = 2;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AGQ</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3 fixed-top" style=" background-color: white !important; box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.35);">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="static/plugins/images/assets/img/logo.png" width="60%" alt="">
            </a>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="col-lg-6 offset-lg-3 offset-md-3">
            <div class="p-5">

                <h1 class="text-center mb-5" style="color: #3E6D81; font-size: 50px"><b>Sign In</b></h1>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Input Email">
                    </div>

                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Input Password">
                    </div>

                    <div class="mt-2 mb-4">
                        <a href="#" style="float:right; color: black; text-decoration: none;">Forgot Password?</a>
                    </div>

                    <br>

                    <div class="d-grid mb-2 mt-2">
                        <button type="submit" name="submit" class="btn btn-block text-light" style="background-color: #3E6D81">Login</button>
                    </div>
                </form>

                <div class="text-center">
                    <p>Don't have an account? <a href="register.php" style="color: black; text-decoration: none;"> <b>Sign Up</b> </a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>