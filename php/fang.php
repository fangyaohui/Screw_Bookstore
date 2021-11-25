<?php
function check_mail($user_mail){
    $result = trim($user_mail);
    if(filter_var($result,FILTER_VALIDATE_EMAIL)){
        return "true";
    }else{
        return "false";
    }
}
function fang1(){
    include_once 'common/library/Db.php';
    $db = Db::getInstance();
    $u_id = $db->insert_id();
    $username = "fangyaohui1";
    $password = "123456";
    $email = "1212341234";
    $role = 2;
    $time = date('Y-m-d h:i:s',time());
    $flag = 0;
    $sql = "insert into users values({$u_id},'{$username}','{$password}','','{$email}','','0','2','','{$time}','');";
    $res = $db->write($sql);
    echo $res;
}
function fang2(){
//    require_once 'common/library/Db.php';
//    $username = "fang";
//    $db = Db::getInstance();
//    $sql = "update `users` set `u_username`='{$this->username}'";
////    $sql = "select * from `users` where `u_username`='{$username}';";
//    $res = $db->write($sql);
//    print_r($res);
////$res = $s1->read_all("select * from users");
}
fang2();
?>