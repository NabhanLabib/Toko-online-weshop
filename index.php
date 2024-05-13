    <?php
        include_once("function/helper.php");
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Weshop|Barang barang Elektronik</title>
    <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL."index.php";?>" >
                <img src="<?php echo BASE_URL."images/images/logo.png";?>" />
            </a>

            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL. "index.php?page=login";?>">Login</a>
                    <a href="<?php echo BASE_URL. "index.php?page=register";?>">Register</a>
                </div>

                <a href="<?php echo BASE_URL."index.phppage=keranjang";?>" id="button-keranjang" >
                <img src="<?php echo BASE_URL."images/images/cart.png";?>" />
                </a>
            </div>
        </div>

        <div id="content">  </div>
        <div id="footer"> 
            <p>Copyright Weshop 2024</p>
        </div>
    </div>
</body>
</html>