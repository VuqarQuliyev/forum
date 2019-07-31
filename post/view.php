<?php


require_once "../template/posts.php";


use App\Poster\Poster;

$poster = new Poster();

$posts = $poster->getPosts();


if (isset($_GET['id'])){
    $ID = $_GET['id'];
}
$postedById = $poster->getPostById($ID);
//print_r ($postedById);
//exit;




?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../template/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
<header>
    <div class="head_of_page container-fluid">
        <div class="container">
            <div class="row">
                <div class="logo" style="width: 140px">
                    <img src="../media/img/logo_forum.jpeg">
                </div>
                <div class="search-system offset-7 align-self-center">
                    <input type="search" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>


        </div>

    </div>
</header>

<div class="container">



        <div class="row box-view ">

            <div class="left-box col-lg-1">
                <!--<img src="../media/img/users_img.png" alt="no photo">-->
                <span>A</span>
            </div>
            <div class="middle-box col-lg-11">
                <h2>
                    <a href="" style="text-decoration: none">
                        <?= $postedById->title?>
                    </a>
                </h2>
                <span><?=$postedById->body ?></span>
            </div>

        </div>


</div>

<footer>
    <div class="container-fluid foot_position">
        <div class="container">
            <div class="row">
                <div class="footer col-lg-6">
                    <ul class="foot_nav">
                        <li>Home</li>
                        <li>Comments</li>
                        <li>Likes</li>
                        <li>About Us</li>
                    </ul>
                    <hr>
                    <p>© 2019 Forum (v1.3.6) - All Rights Reserved</p>
                </div>

            </div>
        </div>
    </div>
</footer>

</body>


</html>

