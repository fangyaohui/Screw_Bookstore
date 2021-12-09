<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
</head>
<body>
<div>
    <?php
        require_once 'common/top.php';
    ?>
    <div class="content1">
        <div class="dif_Rank">
            <div class="rankTitle">
                <h2>
                    出版图书            </h2>
                <p><span class="lineL"></span>排行榜<span class="lineR"></span></p>
            </div>
            <div class="RankCon">
                <div class="KindsRank">
                    <h3>
                        <span></span>
                        <a href="">编辑推荐</a>
                    </h3>
                    <ul>
                        <?php
                            require_once 'common/library/Db.php';
                            $db = Db::getInstance();
                            $sql = "select * from `books` order by praise desc limit 0,30;";
                            $res = $db->read_all($sql);
                            $i = 1;
                            foreach($res as $temp){
                                $bookname = $temp['bookname'];
                                $book_id = $temp['id'];
                                $praise = $temp['praise'];
                                $integral = $temp['integral'];
                                echo "<li><dl class='close'><dt>{$i}</dt><dd><i><a href='book.php?bookid={$book_id}'>{$bookname}</a></i><span><s></s>$integral</span></dd></dl> </li>";
                                $i = $i + 1;
                            }
                        ?>
                    </ul>
                </div>
                <div class="KindsRank">
                    <h3>
                        <span></span>
                        <a href="" target="_blank">螺钉畅销</a>
                    </h3>
                    <ul>
                        <?php
                        require_once 'common/library/Db.php';
                        $db = Db::getInstance();
                        $sql = "select * from `books` order by num desc limit 0,30;";
                        $res = $db->read_all($sql);
                        $i = 1;
                        foreach($res as $temp){
                            $bookname = $temp['bookname'];
                            $book_id = $temp['id'];
                            $praise = $temp['praise'];
                            $integral = $temp['integral'];
                            echo "<li><dl class='close'><dt>{$i}</dt><dd><i><a href='book.php?bookid={$book_id}'>{$bookname}</a></i><span><s></s>$integral</span></dd></dl> </li>";
                            $i = $i + 1;
                        }
                        ?>
                    </ul>
                </div>
                <div class="KindsRank">
                    <h3>
                        <span></span>
                        <a href="" target="_blank">免费图书</a>
                    </h3>
                    <ul>
                        <?php
                        require_once 'common/library/Db.php';
                        $db = Db::getInstance();
                        $sql = "select * from `books` where `integral`=0 order by praise desc limit 0,30;";
                        $res = $db->read_all($sql);
                        $i = 1;
                        foreach($res as $temp){
                            $bookname = $temp['bookname'];
                            $book_id = $temp['id'];
                            $praise = $temp['praise'];
                            $integral = $temp['integral'];
                            echo "<li><dl class='close'><dt>{$i}</dt><dd><i><a href='book.php?bookid={$book_id}'>{$bookname}</a></i><span><s></s>$integral</span></dd></dl> </li>";
                            $i = $i + 1;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="v1_foot">
        <div class="aboutcompany"></div>
    </div>
</div>

</body>
</html>