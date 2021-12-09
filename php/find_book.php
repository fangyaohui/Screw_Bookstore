<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/find_book.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php  require_once 'common/top.php'?>
    <?php
        require_once 'common/library/Db.php';
        require_once 'common/function.php';
        $str = (string)$_SERVER['QUERY_STRING'];
        $str = preg_split("/&/",$str);
        $page = preg_split('/=/',$str[0])[1];

        $key = input('post','keyword','s');
        $db = Db::getInstance();
        $sql = "select * from `books` where `bookname` like '%{$key}%' or `author` like '%{$key}%';";
        $res = $db->read_all($sql);
        $num = count($res);
        $maxpage = ceil($num / 10);
    ?>
    <div style="height: auto;">
        <div class="conLayout cf search nConlNav">
            <div class="conLeft fl">
                <div class="layout_h1">
                    <h1 style="font-family: 楷体">找到 <?php echo $num;?> 条符合<span class="sBookName"><?php echo $key;?></span>条件的作品</h1>
                </div>
                <ul class="sResult" style="transform: translateX(-30px);">
                    <?php
                        $size = 10;$page1 = ($page - 1)*$size;
                        $sql = "select * from `books` where `bookname` like '%{$key}%' or `author` like '%{$key}%' limit {$page1},10;";
                        $res = $db->read_all($sql);
                        foreach($res as $temp){
                            echo "<li><div class='cf'><a href='book.php?bookid ={$temp['id']}' class='cover w_104 fl'><img src='.{$temp['img']}'></a>";
                            echo "<div class='bookMess fr'><a href='book.php?bookid ={$temp['id']}'><h3>{$temp['bookname']}</h3></a><p class='author'>作者:{$temp['author']}<strong></strong></p>";
                            echo "<p class='brief'>{$temp['abstract']}</p></div></li>";
                        }

                    ?>
                </ul>
                <div class="page">
                    <?php
                        echo "<a href='find_book.php?page=1'>首页</a>";
                        $page1 = $page - 1;
                        if($page != 1){
                            echo "<a href='find_book.php?page={$page1}'>上一页</a>";
                        }
                        $page2 = $page + 1 ;
                        echo "<span class='current'>{$page}</span>";
                        if($page != $maxpage){
                            echo "<a href='find_book.php?page={$page2}'>下一页</a>";
                        }
                        echo "<a href='find_book.php?page={$maxpage}'>尾页</a>";
                    ?>
                </div>
                <div class="v1_foot">
                    <div class="aboutcompany">
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>