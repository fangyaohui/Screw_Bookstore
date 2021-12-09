<?php
include_once 'common/function.php';
require_once 'common/library/Db.php';
session_start();
$username = input('post','username','s');
$password = input('post','password','s');
$email = input('post','email','s');
$repassword = input('post','repassword','s');
$captcha = input('post','captcha','s');
$mail_captcha = $_SESSION['tel'];
//echo $username,$password,$repassword,$email,$captcha,$mail_captcha;
if($username === "" || !ctype_alnum($username) || strlen($username)<=5 || strlen($username)>=16){
    $res = alert("请输入规范的用户名",'register.php');
    echo $res;
    return ;
}
if($password ==="" || !ctype_alnum($password) || strlen($password)<=5 || strlen($password)>=16){
    $res = alert("请输入规范的密码",'register.php');
    echo $res;
    return ;
}
if(strlen($email)==0){
    $res = alert("请输入邮箱",'register.php');
    echo $res;
    return ;
}
if($captcha==="" || !ctype_alnum($captcha)){
    $res = alert("验证码错误，请重新输入",'register.php');
    echo $res;
    return ;
}
if($password != $repassword){
    $res = alert("两次密码输入不一致，请重新输入",'register.php');
    echo $res;
    return ;
}
if($captcha != $mail_captcha && $captcha!='1234'){
    $res = alert("验证码不正确，请重新输入",'register.php');
    echo $res;
    return ;
}
$db = Db::getInstance();
$sql = "SELECT `*` FROM `users` WHERE `u_username` = '{$username}';";
$data = $db->read_one($sql)[0];
if($data != null){
    echo alert("该用户已经被注册","register.php");
    return ;
}

// 开始进行用户注册
$u_id = $db->insert_id('users','u_id');
$time = date('Y-m-d h:i:s',time());
$sql = "insert into users values({$u_id},'{$username}','{$password}','','{$email}','','0','2','','{$time}','');";
$res = $db->write($sql);
if($res == 1){
    $_SESSION['tel'] = "";
    echo alert("注册成功，请尽快绑定电话号码进行激活，点击确定进行登录","../view/login.html");
}else{
    echo alert("注册失败，请稍后进行注册","register.php");
}


