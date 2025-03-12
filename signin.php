<?php

session_start();

include 'conn.php';

if(isset($_POST['submit'])){
    $mobileEmail = $_POST['mobile_email'];
    $password = $_POST['password'];

    $signin = "SELECT * FROM `signup` WHERE `mobile_email`= '$mobileEmail' AND `password`= '$password' ";

    $signin_query = mysqli_query($conn, $signin);

    $row = mysqli_num_rows($signin_query);

    if($row > 0){
        $row1 = mysqli_fetch_assoc($signin_query); $_SESSION['aid'] = $row1['id'];
        $_SESSION['mobileEmail'] = $row1['mobile_email']; $_SESSION['password'] =
        $row1['password'];
        header("location: index.php");
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="./facebook.css">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File no 1</title>
        <link rel="stylesheet" href="./facebook.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    ">
        <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
            href="/css/app-wa-3b124ff0e0d7a67cd8c995d0aeb1d15a.css?vsn=d">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
    </head>

    <body class="signupbod">
        <h1 class="signh1 text-primary d-flex justify-content-center align-items-center">facebook</h1>
        <div class="log_body d-flex justify-content-center">
            <div class="signin  bg bg-white rounded">
                <h3 class="ms-5 ps-4 mt-3">Log in to Facebook</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="container">

                        <div class="row">
                            <div class="col my-3">
                                <input type="text" class="form-control py-3" name="mobile_email"
                                    placeholder="Mobile number or email adress" aria-label="First name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control py-3" name="password" placeholder="New password"
                                    aria-label="First name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center my-3">
                                <button type="submit" name="submit"
                                    class=" btn btn-primary rounded text-white p-2 px-5 mb-2"><span
                                        class="fs-4 mx-5 px-5">Log in</span></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="hr">
                                    <hr style="width: 45%;">
                                </div>
                                <div class="p" style="position: relative;">
                                    <p class="position-absolute" style="left: 175px; bottom: -9px;">or</p>
                                </div>
                                <div class="l position-relative">
                                    <hr class="position-absolute" style="width: 47%;left: 195px; bottom: -1px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <a href="./signup.php" class="text-decoration-none mb-3">
                                    <button type="button" class="signup_btn p-2 rounded text-white px-5">Create new account</button>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>

    </body>

    </html>
</body>

</html>