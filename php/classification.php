<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/classification.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    <?php
        require_once 'common/top.php';
    ?>
    <div class="content1">
    <!--        选择部分    -->
        <div class="genre">
            <div class="difgenre">
                <span class="left">频道</span>
                <div class="right">
                    <ul>
                        <li class="current">
                            <a href="">出版</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="difgenre1">
                <span class="left1">类型</span>
                <div class="right1">
                    <ul >
                        <?php
                            require_once 'common/library/Db.php';
                            $db = Db::getInstance();
                            $sql = "select * from `book_type`;";
                            $res = $db->read_all($sql);
                            $i = 0;
                            foreach($res as $tem){
                                echo "<li";
                                $str = (string)$_SERVER['QUERY_STRING'];
                                $str = preg_split("/&/",$str);
                                $id1 = preg_split('/=/',$str[0])[1];
                                $id2 = preg_split('/=/',$str[1])[1];
                                $id3 = preg_split('/=/',$str[2])[1];
                                $page = preg_split("/=/",$str[3])[1];
                                if ($id1 == $tem['by_id']){
                                    echo " class='current'";
                                }
                                echo "><a href='classification.php?typeid={$tem['by_id']}&id2={$id2}&id3={$id3}&page={$page}'>{$tem['by_type']}</a></li>";
                                $i += 1;
                                if($i%11 == 0){
                                    echo "<li><a> </a></li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="difgenre other">
                <span class="left">其他</span>
                <div class="right">
                    <ul>
                        <?php
                            $fang = ['全部','免费','特价'];
                            for($i=0;$i<2;$i++){
                                echo "<li";
                                if ($id2 == $i){
                                    echo " class='current'";
                                }
                                echo "><a href='classification.php?type_id={$id1}&id2={$i}&id3={$id3}&page={$page}'>$fang[$i]</a>";
                            }
                        ?>
<!--                        <li class="current"><a>全部</a></li>-->
<!--                        <li><a href="">免费</a></li>-->
<!--                        <li><a href="">特价</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="showTitle">
            <?php
                $ha = ['热门','好评'];
                for($i=0;$i<2;$i++){
                    echo "<span class='hot ";
                    if($id3 == $i){
                        echo "current";
                    }
                    echo "'><a href='classification.php?type_id={$id1}&id2={$id2}&id3={$i}&page={$page}'>{$ha[$i]}</a></span>";
                }

            ?>
            <p>
                <?php
                    $page2 = $page - 1;
                    echo "<a href='classification.php?type_id={$id1}&id2={$id2}&id3={$id3}&page={$page2}' class='leftArro'><s><-</s></a>";
                    echo "第<i>{$page}</i>页";
                    $page3 = $page + 1;
                    echo "<a href='classification.php?type_id={$id1}&id2={$id2}&id3={$id3}&page={$page3}' class='rightArro'><s>-></s></a>";
                ?>
            </p>
        </div>
        <div class="show">
            <ul class="newShow">
                <?php
                    // 热门图书
                    require_once 'common/library/Db.php';
                    $db = Db::getInstance();
                    if($id2 == 0 && $page>0){
                        if($id3 == 0){
                            $start = ($page-1) * 60;
                            $sql = "select * from `books` where `booktype`={$id1} order by num desc limit {$start},60;";
                            $res = $db->read_all($sql);
                            $len = count($res);
                            foreach ($res as $temp){
                                $img = $temp['img'];
                                $bookname = $temp['bookname'];
                                $author = $temp['author'];
                                $integral = $temp['integral'];
                                $note = $temp['abstract'];
                                $num = $temp['num'];
                                echo "<li><a href='book.php?bookid={$temp['id']}' target='_blank'><img src='.{$img}' alt='{$bookname}'></a>";
                                echo "<div class='bookMation'><h3><a href='book.php?bookid={$temp['id']}' target='_blank'>{$bookname}</a></h3><p class='tryread'>{$author}<a href='book.php?bookid={$temp['id']}' target='_blank'>查看</a></p>";
                                echo "<span>积分:{$integral} 下载数:{$num}</span><p class='introduce'>{$note}</p></div></li>";
                            }
                        }else if($id3 == 1 && $page!=0){
                            $start = ($page-1) * 60;
                            $sql = "select * from `books` where `booktype`={$id1} order by praise desc limit {$start},60;";
                            $res = $db->read_all($sql);
                            $len = count($res);
                            foreach ($res as $temp){
                                $img = $temp['img'];
                                $bookname = $temp['bookname'];
                                $author = $temp['author'];
                                $integral = $temp['integral'];
                                $note = $temp['abstract'];
                                $num = $temp['num'];
                                echo "<li><a href='book.php?bookid={$temp['id']}' target='_blank'><img src='.{$img}' alt='{$bookname}'></a>";
                                echo "<div class='bookMation'><h3><a href='book.php?bookid={$temp['id']}' target='_blank'>{$bookname}</a></h3><p class='tryread'>{$author}<a href='book.php?bookid={$temp['id']}' target='_blank'>查看</a></p>";
                                echo "<span>积分:{$integral} 下载数:{$num}</span><p class='introduce'>{$note}</p></div></li>";
                            }
                        }
                    }
                    else if($id2 == 1 && $page>0){
                        if($id3 == 0){
                            $start = ($page-1) * 60;
                            $sql = "select * from `books` where `booktype`={$id1} and `integral`=0 order by num desc limit {$start},60;";
                            $res = $db->read_all($sql);
                            $len = count($res);
                            foreach ($res as $temp){
                                $img = $temp['img'];
                                $bookname = $temp['bookname'];
                                $author = $temp['author'];
                                $integral = $temp['integral'];
                                $note = $temp['abstract'];
                                $num = $temp['num'];
                                echo "<li><a href='book.php?bookid={$temp['id']}' target='_blank'><img src='.{$img}' alt='{$bookname}'></a>";
                                echo "<div class='bookMation'><h3><a href='book.php?bookid={$temp['id']}' target='_blank'>{$bookname}</a></h3><p class='tryread'>{$author}<a href='book.php?bookid={$temp['id']}' target='_blank'>查看</a></p>";
                                echo "<span>积分:{$integral} 下载数:{$num}</span><p class='introduce'>{$note}</p></div></li>";
                            }
                        }else if($id3 == 1){
                            $start = ($page-1) * 60;
                            $sql = "select * from `books` where `booktype`={$id1} and `integral`=0 order by praise desc limit {$start},60;";
                            $res = $db->read_all($sql);
                            $len = count($res);
                            foreach ($res as $temp){
                                $img = $temp['img'];
                                $bookname = $temp['bookname'];
                                $author = $temp['author'];
                                $integral = $temp['integral'];
                                $note = $temp['abstract'];
                                $num = $temp['num'];
                                echo "<li><a href='book.php?bookid={$temp['id']}' target='_blank'><img src='.{$img}' alt='{$bookname}'></a>";
                                echo "<div class='bookMation'><h3><a href='book.php?bookid={$temp['id']}' target='_blank'>{$bookname}</a></h3><p class='tryread'>{$author}<a href='book.php?bookid={$temp['id']}' target='_blank'>查看</a></p>";
                                echo "<span>积分:{$integral} 下载数:{$num}</span><p class='introduce'>{$note}</p></div></li>";
                            }
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="changepage">
                    <?php
                        $maxpage = $len;
                        echo "<span>";
                        $page2 = $page -1 ;
                        echo "<a class='down' href='classification.php?type_id={$id1}&id2={$id2}&id3={$id3}&page={$page2}'><i class='iii'>上一页</i>";
                        echo "<a class='cur'>{$page}</a>";
                        $page3 = $page + 1;
                        echo "<a href='classification.php?type_id={$id1}&id2={$id2}&id3={$id3}&page={$page3}' class='down'><i class='iii'>下一页</i><s></s></a>";
                        echo "</span>";
                    ?>
        </div>
    </div>
    <div class="v1_foot">
        <div class="aboutcompany"></div>
    </div>
</div>

</body>
</html>