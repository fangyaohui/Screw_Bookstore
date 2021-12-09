<?php
require_once 'common/function.php';
require_once 'common/library/Db.php';
require_once 'common/library/User.php';
session_start();
$user = unserialize($_SESSION['user']);
if(empty($user)){
    echo alert("您还未登录，点击确定前往登录","../view/login.html");
    return ;
}
$comment = input('post','comment','s');
$user_id = $user->getUid();
$db = Db::getInstance();
$time = date('Y-m-d h:i:s',time());
$c_id = $db->insert_id('comment','c_id');
$book_id = input('post','book_id','s');
$flag = 1;
$num = strlen($comment);
if($num > 900){
    echo alert("抱歉您输入的评论字数超过300字,无法提交,点击确定返回","book.php?bookid={$book_id}");
    return ;
}
$sql = "select count(*) as num from `comment` where b_id={$book_id} and u_id={$user_id}";
$res = $db->read_one($sql);
$num = $res['num'];
if($num >= 50){
    echo alert("因系统判定您有故意刷屏的嫌疑,所以评论提交失败。点击确定返回","book.php?book_id={$book_id}");
    return ;
}
$sql = "insert into `comment` values({$c_id},{$book_id},{$user_id},'{$time}','{$comment}',{$flag});";
$res = $db->write($sql);
if($res == 1){
    echo alert("评论成功，点击确定返回","book.php?bookid={$book_id}");
    return ;
}







//echo $c_id;
//$s1 = Db::getInstance();
//$time = time()+21341;
//$key = "123";
//$data = "1234";
//$sql = "REPLACE INTO `session` SET `s_id` = '{$key}',`expiry_time`='{$time}', `captcha`='{$data}'";
//$res = $s1->write($sql);
//echo $res;


////
////$res = $s1->read_all("select * from users");
////$u_id = $s1->insert_id();
////$u_time = date('Y-m-d h:i:s',time());
////echo $u_time;