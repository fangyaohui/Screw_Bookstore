<?php
require_once 'common/function.php';
require_once 'common/library/Db.php';
require_once 'common/library/User.php';
session_start();
$username = input('post','username','s');
$email = input('post','email','s');
$captcha = input('post','captcha','s');
$password = input('post','password','s');
$repassword = input('post','repassword','s');
$re_captcha = $_SESSION['tel'];

if($username === "" || !ctype_alnum($username) || strlen($username)<=5 || strlen($username)>=16){
    echo alert("请输入规范账号","../view/Find_password.html");
    return ;
}
if(strlen($email)==0){
    echo alert("请输入邮箱","../view/Find_password.html");
    return ;
}
if($password ==="" || !ctype_alnum($password) || strlen($password)<=5 || strlen($password)>=16){
    $res = alert("请输入规范的密码","../view/Find_password.html");
    echo $res;
    return ;
}
if($password != $repassword){
    echo alert("两次输入密码不一致","../view/Find_password.html");
    return ;
}
if($captcha != $re_captcha){
    echo alert("验证码错误,请重新输入","../view/Find_password.html");
    return ;
}
$db = Db::getInstance();
$sql = "select * from users where u_username='{$username}';";
$data = $db->read_one($sql);
$user = new User($data);
if($email != $user->getUMail()){
    echo alert("邮箱不是您注册时填写的邮箱，请重新填写","../view/Find_password.html");
    return ;
}
$user->setUPassword($password);
if($user->save_user()){
    echo alert("修改成功，点击确定跳转登录界面","../view/login.html");
}else{
    echo alert("修改失败，请稍后进行修改","../view/Find_password.html");
}
