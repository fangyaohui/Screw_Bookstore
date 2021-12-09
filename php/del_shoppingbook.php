<?php
require_once 'common/library/Db.php';
require_once 'common/library/User.php';
require_once 'common/function.php';

$str = (string)$_SERVER['QUERY_STRING'];
$str = preg_split("/&/",$str);
$bookid = preg_split('/=/',$str[0])[1];
session_start();
$user = unserialize($_SESSION['user']);
if(empty($user)){
    echo alert("您还未登录，点击确定前往登录","../view/login.html");
    return ;
}
$u_id  = $user->getUid();
$db = Db::getInstance();
$sql = "delete from shopping where `u_id`={$u_id} and `b_id`={$bookid}";
$res = $db->write($sql);
if($res == 1 ){
    echo alert("删除成功","shopping_cart.php");
    return ;
}
