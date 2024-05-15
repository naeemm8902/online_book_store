<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<!-- Include Navigation -->
<div class="landing" id="navContainer">
    <div class="nav1">
        <?php include('./components/nav_top.php'); ?>
    </div>
    <div class="nav2">
        <?php include('./components/nav.php'); ?>
    </div>
    <div class="search">
        <?php include('./components/search.php'); ?>
    </div>
    <!-- <div class="card">
        <h1>TRENDING BOOKS</h1>
        <div>
            <?php include('./components/cover.php'); ?>

        </div>
    </div> -->
    <div class="info">
        <?php include('./components/info.php'); ?>
    </div>
    <div class="card">
        <h1>TRENDING BOOKS</h1>
        <div>
            <?php include('./components/cover.php'); ?>

        </div>
    </div>
    <div class="books">
        <div>
            <?php include('./components/book.php'); ?>

        </div>
    </div>
    <div class="footer">
        <div>
            <?php include('./components/footer.php'); ?>

        </div>
    </div>
</div>

</body>
</html>
