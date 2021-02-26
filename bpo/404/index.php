<!doctype html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT']."/include/header-scripts.php"); ?>
    <title>404 | BPO Bench</title>
</head>
<body>
<section class="error">
    <div class="container">
        <img src="<?php echo $siteurl ?>assets/images/error-page.png" alt="">
        <h2>Oooppss!!!</h2>
        <h3>Page is not found. <br>
            the page is doesnt exist or was deleted
        </h3>
        <a href="<?php echo $siteurl ?>" class="btn btn-black"><span></span>back to home</a>
    </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/include/footer-scripts.php"); ?>
</body>
</html>