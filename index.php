<?php include "./controller/db.php"?>
<?php include "./view/header.php";?>
<!-- body -->

<body>
    <div class="container">
        <!-- title -->
       <?php include "./view/title.php";?>
        <!-- post container -->
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <!-- posts -->
                <?php include "./view/post.php";?>

            </div>
            <div class="col-sm-3"> </div>

        </div>
    </div>
</body>

</html>
