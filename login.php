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
        <div class="uk-grid uk-child-width-1-3@s">
            <form class="">
            <h2>Login</h2>
                <div class="">
                    <label class="" for="form-stacekd-text">Email</label>
                    <div class="">
                        <input class="" id="form-stacked-text" type="email" required="" />
                    </div>
                </div>
                <div class="">
                    <label class="" for="form-stacekd-text">Password</label>
                    <div class="">
                        <input class="" id="form-stacked-text" type="password" required="" />
                    </div>
                </div>
                <div class="">
                    <button class="" type="submit">Login</button>
                </div>
            
            </form>        
        </div>
    </div>

    <?php require_once "inc.footer.php"; ?>
    
</body>
</html>