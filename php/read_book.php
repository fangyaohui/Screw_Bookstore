<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>免费试读</title>
    <link rel="stylesheet" href="../css/read_book.css" type="text/css">
</head>

<body>

<?php
require_once 'common/library/Db.php';
$str = (string)$_SERVER['QUERY_STRING'];
$str = preg_split("/&/",$str);
$bookid = preg_split('/=/',$str[0])[1];
$db = Db::getInstance();
$sql = "select * from books where `id` = {$bookid}";
$res = $db->read_one($sql);
$bookname = $res['bookname'];
$author = $res['author'];
$integral = $res['integral'];
$num = $res['num'];
$praise = $res['praise'];
$abstract = $res['abstract'];
?>
<div class='card'>
    <div class="imgBox">
        <img src="../img/readbook1.png">
    </div>
    <div class='details'>
        <h2>《<?php echo "{$bookname}"?>》</h2>
        <p><?php echo "{$abstract}..."?></p>
    </div>
</div>

</body>

</html>