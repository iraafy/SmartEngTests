<?php

require 'conn.php';
session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

function registrasi($data)
{
    global $conn;
    $nama = $data["name"];
    $email = $data["email"];
    $password = $data["password"];
    $find_email = mysqli_query($conn, "SELECT email FROM siswa WHERE email = '$email'");
    // if (mysqli_fetch_assoc($find_email)) {
    //     echo "<script>
    // 			alert('email sudah terdaftar!');
    // 		</script>";
    // } else {
    $sql = "INSERT INTO user VALUES('', '$nama', '$email', '$password', 'basic')";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
    // }
}

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        $error = 1;
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

                <h1 class="text-center mb-5" style="color: #3E6D81; font-size: 50px"><b>Sign Up</b></h1>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Input Name">

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Input Email">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Input Password">
                    </div>

                    <div class="d-grid mb-2 mt-3">
                        <button type="submit" name="register" class="btn btn-block text-light" style="background-color: #3E6D81">Register</button>
                    </div>
                </form>

                <div class="text-center">
                    <p>Already have an account? <a href="login.php" style="color: black; text-decoration: none;"> <b>Sign In</b> </a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>