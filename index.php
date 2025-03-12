<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-3b124ff0e0d7a67cd8c995d0aeb1d15a.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
    <link rel="stylesheet" href="./facebook.css">

</head>

<body class="index_bod">


    <?php
include 'conn.php';
if (isset($_POST['show'])) {
    $textPara = $_POST['text'];
    $showImage = $_FILES['photo'];
    $statusImage = $showImage['name'];

    // Move the uploaded file
    move_uploaded_file($showImage['tmp_name'], 'photo/' . $statusImage);

    // Use PHP to insert the current timestamp
    $currentTime = date('Y-m-d H:i:s'); // Get current time in 'Y-m-d H:i:s' format

    // Insert post with the current time
    $profile = "INSERT INTO `status`(`para`, `status_pic`, `time`) 
                VALUES ('$textPara', '$statusImage', '$currentTime')";
    $query = mysqli_query($conn, $profile);
}



$view = "SELECT * FROM `signup`";

$query = mysqli_query($conn, $view);

while($result = mysqli_fetch_array($query)){



?>

    <!-- Header -->

    <header class="bg-white index_head">
        <div class="container-fluid py-2 header">
            <div class="row">
                <div class="col-3 d-flex">
                    <a href=""><i class="fa-brands fa-facebook text-primary fs-1 mt-1 me-2"></i></a>
                    <div class="border rounded-pill d-flex bg-light p-2"><i
                            class="fa-solid fa-magnifying-glass mt-2 me-2"></i><input type="text"
                            placeholder="Search facebook" class="bg-light"></div>
                </div>
                <div class="col-6 d-flex head_anc justify-content-evenly">
                    <a href=""><i class="fa-sharp fa-solid fa-house fs-2 ms-5 me-5 py-2"></i></a>
                    <a href=""><i class="fa-solid fa-shop fs-2 ms-5 me-5 py-2"></i></a>
                    <a href=""><i class="fa-solid fa-user-group ms-5 me-5 py-2 fs-2"></i></a>
                    <a href=""><i class="fa-solid fa-gamepad ms-5 me-5 py-2 fs-2"></i></a>
                </div>
                <div class="col-3 head1_anc d-flex justify-content-end">
                    <a href=""><i class="fa-solid fa-list-dropdown mx-2 ms-2 me-2 p-1 mt-2 fs-4"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-messenger ms-2 me-2 p-1 mt-2 fs-4"></i></a>
                    <a href="" class="mt-1"><i class="fa-solid fa-bell ms-2 me-2 p-1 mt-1 fs-4"></i></a>
                    <div class="dropdown mt-1 d-flex">
                        <button class="rounded-pill" type="button" data-bs-toggle="dropdown"
                            style="background-image: url(photo/<?php echo $result['image']?>); background-size: cover; width: 43px; height: 43px;">
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex" href="#"><img src="photo/<?php echo $result['image'];?>"
                                        height="43" width="43" class="rounded-pill me-2" alt="">
                                    <h5 class="mt-1 text-dark">
                                        <?php echo $result['fname']; echo $result['sname'];?>
                                    </h5>
                                </a>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                            <li class="px-1"><a class="dropdown-item rounded bg-secondary d-flex text-white"
                                    href="#"><span class="ms-5"><i class="fa-light fa-user-group-simple me-2"></i>See
                                        all
                                        profiles</span></a></li>
                            </li>
                            <li><a class="dropdown-item d-flex text-dark" href="#"><i
                                        class="fa-solid fa-gear p-2 fs-5 me-2 mb-2 rounded-pill bg-light"></i>
                                    <h5 class="mt-1">Settings & Privacy</h5><i class="fa-solid fa-chevron-right"
                                        style="margin-left: 160px; margin-top: 12px;"></i>
                                </a></li>
                            <li><a class="dropdown-item d-flex text-dark" href="#"><i
                                        class="fa-solid fa-message-question fs-5 me-2 p-2 rounded-pill bg-light"></i>
                                    <h5 class="mt-1">Help & Support</h5><i class="fa-solid fa-chevron-right"
                                        style="margin-left: 180px; margin-top: 12px;"></i>
                                </a>
                            </li>
                            <li><a class="dropdown-item d-flex text-dark" href="#"><i
                                        class="fa-sharp-duotone fa-solid fa-moon-stars fs-5 me-2 p-2 rounded-pill bg-light"></i>
                                    <h5 class="mt-1">Disable & Acessibility</h5><i class="fa-solid fa-chevron-right"
                                        style="margin-left: 130px; margin-top: 12px;"></i>
                                </a>
                            </li>
                            <li><a class="dropdown-item d-flex text-dark" href="#"><i
                                        class="fa-duotone fa-solid fa-info fs-5 me-2 p-2 rounded-pill bg-light"></i>
                                    <h5 class="mt-1">Give Feedback</h5>
                                </a>
                            </li>
                            <li><a class="dropdown-item d-flex text-dark" href="logout.php"><i
                                        class="fa-sharp-duotone fa-solid fa-arrow-right-from-bracket fs-5 me-2 p-2 rounded-pill bg-light"></i>
                                    <h5 class="mt-1">Log out</h5>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="px-3">
                                <p class="text-secondary">Privacy · Terms · Advertising · Ad choices · Cookies ·More ·
                                    Meta
                                    © 2024</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container-fluid py-3 mt-5 px-2">
            <div class="row">

                <!--Section no 1  -->
                <div class="col-3 index_sec1_t position-relative">
                    <div class="index_sec1">
                        <a href="" class="text-decoration-none ">
                            <div class="d-flex  px-2  pt-2 index_side">
                                <img src="photo/<?php echo $result['image'];?>" width="35" height="35"
                                    class="rounded-pill" alt="">
                                <p class="ps-2 mt-1 text-dark">
                                    <?php echo $result['fname']; echo $result['sname'];?>
                                </p>
                            </div>
                        </a>

                        <a href="" class="text-decoration-none">
                            <div class=" py-2 d-flex px-2 index_side">
                                <i class="fa-solid fa-user-group text-primary fs-5"></i>
                                <p class="ps-2 text-dark">Friends(119 online)</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none">
                            <div class=" py-2  px-2  index_side d-flex">
                                <i class="fa-regular fa-clock-two text-success fs-5"></i>
                                <p class="ps-2 text-dark">Memory</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none">
                            <div class="py-2  px-2  index_side d-flex">
                                <i class="fa-solid fa-bookmark fs-5 text-warning"></i>
                                <p class="ps-2 text-dark">Saved</p>
                            </div>
                            <a href="" class="text-decoration-none">
                                <div class="py-2  px-2  index_side d-flex">
                                    <i class="fa-regular fa-users-line text-danger fs-5"></i>
                                    <p class="ps-2 text-dark">Groups</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-sharp fa-solid fa-circle-play fs-5 text-primary"></i>
                                    <p class="ps-2 text-dark">Video</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-solid fa-comment-dots fs-5 mt-1 text-dark"></i></i>
                                    <p class="ps-2 text-dark">Feeds</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-thin fa-calendar-days text-secondary fs-5"></i>
                                    <p class="ps-2 text-dark">Events</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-duotone fa-solid fa-signal-bars-good fs-5 text-primary"></i>
                                    <p class="ps-2 text-dark">Ads Manager</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2  px-2  index_side d-flex">
                                    <i class="fa-solid fa-heart fs-5 text-danger"></i>
                                    <p class="ps-2 text-dark">Fundariser</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2  px-2  index_side d-flex">
                                    <i class="fa-solid fa-gift fs-5 text-danger"></i>
                                    <p class="ps-2 text-dark">Birthdays</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-sharp fa-regular fa-sun-plant-wilt fs-5 text-success"></i>
                                    <p class="ps-2 text-dark">Climate science center</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-brands fa-google fs-5 text-primary"></i>
                                    <p class="ps-2 text-dark">Gaming Video</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-brands fa-facebook-messenger mt-1 text-primary"></i>
                                    <p class="ps-2 text-dark">Messenger</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  index_side px-2 ">
                                    <i class="fa-brands fa-facebook-messenger text-warning"></i>
                                    <p class="ps-2 text-dark">Messenger kids</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  px-2 index_side ">
                                    <i class="fa-brands fa-first-order text-primary"></i>
                                    <p class="ps-2 text-dark">Orders and payments</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  px-2  index_side">
                                    <i class="fa-sharp-duotone fa-solid fa-flag-checkered fs-5 text-success"></i>
                                    <p class="ps-2 text-dark">Pages</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none">
                                <div class="py-2 d-flex  px-2 margin index_side">
                                    <i class="fa-solid fa-clapperboard-play text-primary fs-5"></i>
                                    <p class="ps-2 text-dark">Reels</p>
                                </div>
                            </a>
                    </div>
                </div>

                <!--Section no 2  -->
                <div class="col-6">
                    <div class="index_sec2 bg-white rounded p-3 mb-3 ">
                        <div class="d-flex ms-3 ">
                            <img src="photo/<?php echo $result['image'];?>" class="rounded-pill me-2 mt-1" width="35px"
                                height="35px" alt="">
                            <!-- Modal -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                    <span class="ps-5 ms-5"><span class="ps-5 ms-3">Create
                                                            Post</span></span>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class=" fs-6 d-flex">
                                                    <img src="photo/<?php echo $result['image'];?>" width="43"
                                                        height="43" class="rounded-pill mt-1" alt="">
                                                    <div class="ms-2">
                                                        <h5 class="m-0">
                                                            <?php echo $result['fname']; echo $result['sname'];?>
                                                        </h5>
                                                        <div class="btn-group">
                                                            <button type="button" class="rounded px-2 m-0 btn-light"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                public<i
                                                                    class="fa-sharp fa-solid fa-caret-down ps-1 fs-6"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else
                                                                        here</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Separated link</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <textarea class="fs-4" placeholder="What's on your mind Usman?"
                                                        name="text" id="floatingTextarea2"
                                                        style="height: 200px; width: 450px; outline: none;"></textarea>
                                                </div>

                                                <!-- Add to your post row -->
                                                <div>
                                                    <div class="container">
                                                        <div class="row border border-secondary py-2 rounded">
                                                            <div class="col-7 fs-4">Add to your post</div>
                                                            <div class="col-1 fs-4">
                                                                <a class="bg-white"
                                                                    data-bs-target="#exampleModalToggle2"
                                                                    data-bs-toggle="modal">
                                                                    <i
                                                                        class="fa-sharp-duotone fa-solid fa-images text-success"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-1 fs-4">
                                                                <i class="fa-solid fa-address-book text-info"></i>
                                                            </div>
                                                            <div class="col-1 fs-4">
                                                                <i
                                                                    class="fa-sharp fa-solid fa-location-dot text-danger"></i>
                                                            </div>
                                                            <div class="col-1 fs-4">
                                                                <i class="fa-solid fa-gif text-success"></i>
                                                            </div>
                                                            <div class="col-1 fs-4">
                                                                <i class="fa-solid fa-ellipsis text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><span
                                                        class="ps-5 ms-5"><span class="ms-5">Choose the
                                                            image</span></span>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>

                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Default file
                                                                    input example</label>
                                                                <input class="form-control" type="file" id="formFile"
                                                                    name="photo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" data-bs-dismiss="modal" name="show"
                                                    class="btn btn-primary p-1 pe-3 rounded"><span
                                                        class="mx-5 px-5"><span class="mx-5 px-5"><span
                                                                class="ps-4"></span>Post</span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-light px-5 text-secondary rounded-pill"
                                    data-bs-target="#exampleModalToggle" data-bs-toggle="modal" 
                                    <span class="pe-5 me-5"><span class="pe-5 me-5"><span class="pe-5 me-5">What's on your
                                            mind
                                            Usman?</span></span></span>
                                </a>
                            </form>
                        </div>
                        <hr class="text-secondary d-flex" style="height: 1px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <a href="" class="text-decoration-none">
                                        <div class="d-flex index_side py-2">
                                            <i class="fa-solid fa-video fs-5 ms-2 me-1 text-danger"></i>
                                            <h6 class="text-secondary">Live-video</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="" class="text-decoration-none">
                                        <div class="d-flex index_side py-2 ps-2">
                                            <i class="fa-solid fa-camera-retro ms-2 mt-1 fs-5 me-1 text-success"></i>
                                            <h6 class="text-secondary">Photo/Video</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="" class="text-decoration-none">
                                        <div class="d-flex index_side py-2">
                                            <i class="fa-regular fa-face-smile-hearts ms-2 fs-4 me-1 text-warning"></i>
                                            <h6 class="text-secondary">Feelings/Activity</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row slider">
                            <div class="col ">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/KRHg6yZw3r0?si=gUutVoP4oR4os7iY"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/npKuuuccsKU?si=rdxW8xhcHdDYrT8d"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/pXrNJ0q5lTs?si=dOW4ACXHWi9vr4Od"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/BgrfOdOo5VE?si=M00VzA5pMyuDb0qV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/npKuuuccsKU?si=rdxW8xhcHdDYrT8d"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col ">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/KRHg6yZw3r0?si=gUutVoP4oR4os7iY"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col">
                                <iframe width="130" height="200" class="rounded"
                                    src="https://www.youtube.com/embed/npKuuuccsKU?si=rdxW8xhcHdDYrT8d"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <?php

include 'conn.php';
$picture = "SELECT * FROM `status` ORDER BY `time` DESC";
$profile = mysqli_query($conn, $picture);

function timeAgo($timestamp) {
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;

    $seconds = $time_difference;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    if ($seconds <= 60) {
        return "Just Now";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "one minute ago";
        } else {
            return "$minutes minutes ago";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
        } else {
            return "$hours hours ago";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "yesterday";
        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            return "one week ago";
        } else {
            return "$weeks weeks ago";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "one month ago";
        } else {
            return "$months months ago";
        }
    } else {
        if ($years == 1) {
            return "one year ago";
        } else {
            return "$years years ago";
        }
    }
}

while ($profile_pic = mysqli_fetch_array($profile)) {
                    ?>
                    <form action="delete.php" method="POST" enctype="multipart/form-data">
                        <div class="index_sec_vid mt-2 bg-white rounded-3">
                            <div class="container-fluid">
                                <div class="row  p-3 ">
                                    <div class=" d-flex col-9">
                                        <a href="" class="text-decoration-none"><img
                                                src="photo/<?php echo $result['image'];?>" height="35" width="35"
                                                class="rounded-3 me-2 mt-1" alt=""></a>
                                        <div class="">
                                            <a href="" class="text-decoration-none text-dark">
                                                <?php echo $result['fname']; echo $result['sname'];?>
                                            </a><br>
                                            <a href="" class="text-decoration-none text-secondary">
                                                <?php echo timeAgo($profile_pic['time']); ?>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="index_sec_vid_icon modalheader d-flex justify-content-end mt-2 col-3">
                                        <a href="" class="text-decoration-none text-secondary"><i
                                                class="fa-duotone fa-solid fa-circle-ellipsis fs-5"></i></a>
                                        <a href="delete.php?id=<?php echo $profile_pic['id']; ?>"
                                            class="btn-close text-decoration-none text-secondary"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="">
                                            <?php echo $profile_pic['para'];?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <img src="photo/<?php echo $profile_pic['status_pic'];?>" class="index_sec_vid_pic" alt="">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="p-2 rounded-pill bg-light">❤️️</i><i
                                            class="p-2 rounded-pill bg-light">👍</i>
                                    </div>
                                    <div class="col-7">
                                        <p class=" text-secondary">15k</p>
                                    </div>
                                    <div class="col">
                                        <a href="" class="text-decoration-none text-secondary"><i
                                                class="fa-solid fa-comment">218</i></a><a href=""
                                            class="text-decoration-none text-secondary"><i
                                                class=" ms-3 fa-solid fa-share">79</i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-3 index_side ">
                                        <a href="" class="text-decoration-none text-secondary d-flex"><i
                                                class="fa-duotone fa-solid fa-thumbs-up text-secondary mt-2 fs-5 "></i>
                                            <p><span class="pe-2 fs-4">Like</span></p>
                                        </a>
                                    </div>
                                    <div class="col-3 index_side d-flex">
                                        <a href="" class="text-decoration-none text-secondary d-flex"><i
                                                class="fa-solid fa-comment-lines text-secondary mt-2 fs-5"></i>
                                            <p><span class="pe-2  fs-4">Comment</span></p>
                                        </a>
                                    </div>
                                    <div class="col-3 index_side d-flex">
                                        <a href="" class="text-decoration-none text-secondary d-flex"><i
                                                class="fa-sharp fa-regular fa-paper-plane-top text-secondary mt-2 fs-5"></i>
                                            <p><span class="pe-2  fs-4">Send</span></p>
                                        </a>
                                    </div>
                                    <div class="col-3 index_side d-flex">
                                        <a href="" class="text-decoration-none text-secondary d-flex"><i
                                                class="fa-solid fa-square-share-nodes text-secondary mt-2 fs-5"></i>
                                            <p><span class="pe-2 fs-4">Share</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
}
};
?>

                </div>

                <!--Section no 3  -->
                <div class="col-3 position-relative">
                    <div class="index_sec3">
                        <div class="d-flex">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-8">
                                        <h4 class="text-secondary">Contact</h4>
                                    </div>
                                    <div class="col-2 d-flex justify-content-end head1_anc">
                                        <a href="" class="text-decoration-nonetext-secondary"><i
                                                class="fa-solid fa-magnifying-glass fs-5 mt-2 mx-2"></i></a>
                                    </div>
                                    <div class="col-2 d-flex justify-content-end head1_anc">
                                        <a href="" class="text-decoration-none text-danger"><i
                                                class="fa-sharp fa-regular fa-grip-dots fs-5  mt-2 mx-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/best-product-6.jpg" width="35" height="35" class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Usman Attari</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/blake-verdoorn-cssvEZacHvQ-unsplash.jpg" width="35" height="35"
                                class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Adnan Shafeeq</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/cart-page-header-img.jpg" width="35" height="35" class="rounded-pill"
                                alt="">
                            <p class="ps-2 mt-1">Umar Ishfaq</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/daniel-malikyar-F1leFzugQfM-unsplash.jpg" width="35" height="35"
                                class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Rizwan madni</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/best-product-6.jpg" width="35" height="35" class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Bilal Ameeni</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/blake-verdoorn-cssvEZacHvQ-unsplash.jpg" width="35" height="35"
                                class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Abdulkareem</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/cart-page-header-img.jpg" width="35" height="35" class="rounded-pill"
                                alt="">
                            <p class="ps-2 mt-1">Shahzad Nadeem</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/daniel-malikyar-F1leFzugQfM-unsplash.jpg" width="35" height="35"
                                class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Ruhab Aziz</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/best-product-6.jpg" width="35" height="35" class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Hassan fareed</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/cart-page-header-img.jpg" width="35" height="35" class="rounded-pill"
                                alt="">
                            <p class="ps-2 mt-1">Ahmad Hassan</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/daniel-malikyar-F1leFzugQfM-unsplash.jpg" width="35" height="35"
                                class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Gulam Nabi</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/cart-page-header-img.jpg" width="35" height="35" class="rounded-pill"
                                alt="">
                            <p class="ps-2 mt-1">Gulam Rasool</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/blake-verdoorn-cssvEZacHvQ-unsplash.jpg" width="35" height="35"
                                class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Munawar Hussain</p>
                        </div>
                        <div class="d-flex  px-2 index_side pt-2">
                            <img src="./photo/best-product-6.jpg" width="35" height="35" class="rounded-pill" alt="">
                            <p class="ps-2 mt-1">Hassan Madni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <script>
        // Function to convert time into "time ago" format
        function timeAgo(timestamp) {
            const timeAgo = new Date(timestamp).getTime();
            const currentTime = new Date().getTime();
            const timeDifference = currentTime - timeAgo;

            const seconds = timeDifference / 1000;
            const minutes = seconds / 60;
            const hours = minutes / 60;
            const days = hours / 24;
            const weeks = days / 7;
            const months = days / 30.44; // Approximate number of days in a month
            const years = days / 365.25; // Approximate number of days in a year

            if (seconds <= 60) {
                return "Just Now";
            } else if (minutes <= 60) {
                return Math.floor(minutes) === 1 ? "one minute ago" : Math.floor(minutes) + " minutes ago";
            } else if (hours <= 24) {
                return Math.floor(hours) === 1 ? "an hour ago" : Math.floor(hours) + " hours ago";
            } else if (days <= 7) {
                return Math.floor(days) === 1 ? "yesterday" : Math.floor(days) + " days ago";
            } else if (weeks <= 4.3) { // 4.3 == 30/7
                return Math.floor(weeks) === 1 ? "one week ago" : Math.floor(weeks) + " weeks ago";
            } else if (months <= 12) {
                return Math.floor(months) === 1 ? "one month ago" : Math.floor(months) + " months ago";
            } else {
                return Math.floor(years) === 1 ? "one year ago" : Math.floor(years) + " years ago";
            }
        }

        // Function to update the time display
        function updateTimes() {
            const timeElements = document.querySelectorAll('[data-time]');

            timeElements.forEach(function (element) {
                const timestamp = element.getAttribute('data-time');
                const timeAgoText = timeAgo(timestamp);
                element.textContent = timeAgoText; // Update the text content
            });
        }

        // Update the time every minute (60000 milliseconds)
        setInterval(updateTimes, 60000);

        // Initial time update when the page loads
        updateTimes();
    </script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>$('.slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            nextArrow: '<button type="button" class="slick-next"></button>',
            prevArrow: '<button type="button" class="slick-prev"></button>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
    "></script>
</body>

</html>