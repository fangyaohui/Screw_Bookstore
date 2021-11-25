<?php
//    require 'init.php';
    require './library/Captcha.php';
//    require './library/Db.php';
    require './function.php';
    $captcha = captcha::create();
    captcha_save($captcha);
    captcha::showimg($captcha);
?>