<?php
require_once '../php/common/library/Db.php';
$db = Db::getInstance();
$sql = "select * from `books` where `author` like '';";
$res = $db->read_all($sql);
print_r($res);