<?php
    require_once '../php/common/function.php';
    require_once '../php/common/library/Db.php';
    require_once '../php/common/library/User.php';
    $username = input('post','username','s');
    $password = input('post','password','s');
    $captcha = input('post','captcha','s');
    if ($captcha == null){
        $res = alert("登录失败，请输入验证码。",'../view/login.html');
        echo $res;
        return ;
    }
//    验证码验证
    if(!captcha_check($captcha)){
        $res = alert("登录失败，验证码错误。",'../view/login.html');
        echo $res;
        return ;
    }
//    $res = captcha_check($captcha);
//    echo $res,$captcha;
//    return ;
    $db = Db::getInstance();
    $sql = "SELECT `*` FROM `users` WHERE `u_username` = '{$username}';";
    $data = $db->read_one($sql);
//    print_r($data);
    if (!isset($data)){
        $res = alert("登录失败，该用户不存在。",'../view/login.html');
        echo $res;
        return ;
    }
    if($data['u_username']!=$username || $data['u_password']!=$password){
        $res = alert("登录失败，密码错误。",'../view/login.html');
        echo $res;
        return ;
    }
    $user = new User($data);
    session_start();
    $_SESSION['user'] = serialize($user);
    redirect('index.php');
?>