<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="./facebook.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" ">
    <link rel=" stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-3b124ff0e0d7a67cd8c995d0aeb1d15a.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
</head>

<body class="signupbod">

    <?php
    include 'conn.php';

        if(isset($_POST['submit'])){
            $firstName = $_POST['fname'];
            $sureName = $_POST['sname'];
            $date = $_POST['date'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $gender = $_POST['gender'];
            $image = $_FILES['image'];
            $fileImage = $image['name'];
            move_uploaded_file($image['tmp_name'], 'photo/'.$fileImage);
            $mobileEmail = $_POST['mobile_email'];
            $password = $_POST['password'];
            
            $signup = "INSERT INTO `signup`(`fname`, `sname`, `date`, `month`, `year`, `gender`, `image`, `mobile_email`, `password`) 
            VALUES ('$firstName','$sureName','$date','$month','$year','$gender', '$fileImage', '$mobileEmail','$password')";

            $query = mysqli_query($conn, $signup);


            if($query){
                header("location: signin.php");
            }
        }


    ?>



    <h1 class="signh1 text-primary d-flex justify-content-center align-items-center">facebook</h1>
    <div class="log_body d-flex justify-content-center">
        <div class="signup  bg bg-white rounded">
            <h3 class="ms-5 ps-2 mt-3">Create a new account</h3>
            <p class="quick">It's quick and easy</p>
            <hr>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="fname" class="form-control" placeholder="First name"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" name="sname" class="form-control" placeholder="Surname"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="text-secondary pt-2">Date of birth�</label>
                        <div class="col">
                            <select class="form-select" name="date" id="autoSizingSelect">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="month" id="autoSizingSelect">
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="year" id="autoSizingSelect">
                                <option>1901</option>
                                <option>1902</option>
                                <option>1903</option>
                                <option>1904</option>
                                <option>1905</option>
                                <option>1906</option>
                                <option>1907</option>
                                <option>1908</option>
                                <option>1909</option>
                                <option>1910</option>
                                <option>1911</option>
                                <option>1912</option>
                                <option>1913</option>
                                <option>1914</option>
                                <option>1915</option>
                                <option>1916</option>
                                <option>1917</option>
                                <option>1918</option>
                                <option>1919</option>
                                <option>1920</option>
                                <option>1921</option>
                                <option>1922</option>
                                <option>1923</option>
                                <option>1924</option>
                                <option>1925</option>
                                <option>1926</option>
                                <option>1927</option>
                                <option>1928</option>
                                <option>1929</option>
                                <option>1930</option>
                                <option>1931</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="text-secondary py-2 ">Gender�</label>
                        <div class="col">
                            <span class="border rounded p-1">
                                <label for="">Female
                                    <input class="form-check-input ms-3" name="gender" type="radio" id="radioNoLabel1"
                                        value="female" aria-label="..."></label>
                            </span>
                        </div>
                        <div class="col">
                            <span class="border rounded p-1">
                                <label for="">Male
                                    <input class="form-check-input ms-4" name="gender" type="radio" id="radioNoLabel1"
                                        value="male" aria-label="..."></label>
                            </span>
                        </div>
                        <div class="col">
                            <span class="border rounded p-1">
                                <label for="">Custom
                                    <input class="form-check-input ms-3" name="gender" type="radio" id="radioNoLabel1"
                                        value="custom" aria-label="..."></label>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3">
                            <input type="file" class="form-control" name="image"
                                aria-label="First name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col my-3">
                            <input type="text" class="form-control" name="mobile_email"
                                placeholder="Mobile number or email adress" aria-label="First name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="password" placeholder="New password"
                                aria-label="First name">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <p class="login_comment">People who use our service may have uploaded your contact information
                            to Facebook.
                            <a href="https://www.facebook.com/help/637205020878504" class="text-decoration-none">Learn
                                more</a>
                        </p>
                    </div>
                    <div class="row">
                        <p class="login_comment">
                            By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may
                            receive
                            SMS notifications from us and can opt out at any time. </p>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <button type="submit" name="submit" class="signup_btn rounded text-white p-2 px-5 mb-2">Sign
                                up</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <a href="signin.php" class="text-decoration-none mb-3">Already have an account</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>