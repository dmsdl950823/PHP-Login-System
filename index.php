<?php 
    // allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title></title>
	<meta name="robots" content="noindex, nofollow" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
    </head>
<body>

    <div class="uk-section uk-container">

        <?php
            echo "Hello World!";
            date('Y m d');
        ?>

        <p>
            <a href="/login.php">Login</a>
            <a href="/register.php">Register</a>
        </p>

    </div>

    <?php require_once "inc.footer.php"; ?>
    
</body>
</html>