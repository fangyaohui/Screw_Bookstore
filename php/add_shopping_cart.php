<?php

require_once 'common/library/Db.php';
require_once 'common/function.php';
require_once 'common/library/User.php';

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
$sql = "select * from shopping where `u_id`={$u_id} and `b_id`={$bookid}";
$res = $db->read_all($sql);
$num = count($res);
if($num !=0 ){
    echo alert("您的购物车中已经添加过了这本书","book.php?bookid={$bookid}");
    return ;
}
//$sql = "select * from purchased where `u_id`={$u_id} and `b_id`={$bookid}";
//$res = $db->read_all($sql);
//$num = count($res);
//if($num !=0 ){
//    echo alert("您已经购买过这本书","book.php?bookid={$bookid}");
//    return ;
//}
$s_id = $db->insert_id('shopping','s_id');
$sql = "insert into shopping values ({$s_id},{$u_id},{$bookid})";
$res = $db->write($sql);
if ($res == 1){
    echo alert("添加成功","book.php?bookid={$bookid}");
    return ;
}