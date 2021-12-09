<?php
require_once 'common/function.php';
require_once 'common/library/Db.php';
session_start();
$user = unserialize($_SESSION['user']);
if(empty($user)){
    return false;
}
else{
    return true;
}