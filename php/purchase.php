<?php
require_once 'common/library/User.php';
require_once 'common/function.php';
require_once 'common/library/Db.php';

session_start();
$user = unserialize($_SESSION['user']);
if(empty($user)){
    echo alert("您还未登录，点击确定前往登录","../view/login.html");
    return ;
}
$u_id  = $user->getUid();
$db = Db::getInstance();
$sql = "select * from users where u_id={$u_id}";

$u_integral = $db->read_one($sql)['u_integral'];

$str = (string)$_SERVER['QUERY_STRING'];
$str = preg_split("/&/",$str);
$bookid = preg_split('/=/',$str[0])[1];
$sql = "select * from books where id={$bookid}";
$res = $db->read_one($sql);
$need_integral = $res['integral'];

$sql = "select * from purchased where `u_id`={$u_id} and `b_id`={$bookid}";
$res = $db->read_all($sql);
$num = count($res);
if($num !=0){
    echo alert("您已经购买过这本书.点击确定返回","index.php");
    return ;
}
if($need_integral > $u_integral){
    echo alert("您的积分不足以购买本书,请前往充值积分.点击确定返回","index.php");
    return ;
}else{
    $u_integral = $u_integral - $need_integral;
    $user->setUIntegral($u_integral);
    if ($need_integral == 0){
        $res = del_shopping_book($bookid,$u_id);
        $p_id = $db->insert_id('purchased','p_id');
        $res = $db->write("insert into purchased values({$p_id},{$u_id},{$bookid});");
        echo alert("购买成功,点击确定返回","index.php");
        return ;
    }
    if($user->save_user()){
        $res = del_shopping_book($bookid,$u_id);
        $p_id = $db->insert_id('purchased','p_id');
        $res = $db->write("insert into purchased values({$p_id},{$u_id},{$bookid});");
        echo alert("购买成功,点击确定返回","index.php");
        return ;
    }else{
        echo alert("购买失败,点击确定返回","index.php");
        return ;
    }
}