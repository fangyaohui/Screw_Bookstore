<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    <?php
        require_once 'common/top.php';
    ?>
    <div class="recom">
        <div class="recomWrap">
            <div class="title" id="recommend_book_current_book" style="display: block;">
                <h2>
                    <a href="#" target="_blank" title="零基础学画漫画4：素描技法练习本">
                        <i>螺钉书城今日推荐</i>
                    </a>
                </h2>
                <p>下列图书螺钉书城推荐用户阅读</p>
            </div>
            <div class="book" id="recommend_book_lunbo">
                <div class="book_wrap">
                    <ul id="recommend_book_lunbo_ul" style="position: absolute; display: block; left: 0px;">
                        <?php
                            require_once 'common/library/Db.php';
                            $db = Db::getInstance();
                            $data = [];
                            $img = [];
                            for($i=0;$i<4;$i++) {
                                $num = mt_rand(1, 9632);
                                $sql = "SELECT `*` FROM `books` WHERE `id`={$num};";
                                $res = $db->read_one($sql);
                                $data[] = $res;
                                $data[$i]['img'] = '.' . $data[$i]['img'];
                                $img = $data[$i]['img'];
                                $bookname = $data[$i]['bookname'];
                                $bookname = $data[$i]['bookname'];
                                $bookid = $data[$i]['id'];
                                echo "<li class='little'>
                                                <a href='book.php?bookid={$bookid}' target='_blank'>
                                                    <img src=\"$img\" title='{$bookname}' alt='{$bookname}' class='lazy' style='display: inline-block; height: 156px; width: 117px; margin-top: 5px; overflow: hidden;'>
                                                </a>
                                                <span><b>{$bookname}</span>
                                            </li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="hotbook">
            <div class="conBigTitle">
                <h2>热门图书</h2>
                <p>
                    <?php
                        require_once 'common/library/Db.php';
                        $db = Db::getInstance();
                        $sql = "select * from `book_type` order by by_hotnum desc ;";
                        $res = $db->read_all($sql);
                        for($i=0;$i<6;$i++){
                            echo "<a href='classification.php?id1={$res[$i]['by_id']}&id2=0&id3=0&page=1'>{$res[$i]['by_type']}</a>|";
                        }
                    ?>
                </p>
            </div>
            <div class="show">
                <div class="showLeft">
                    <?php
                        require_once 'common/library/Db.php';
                        $db = Db::getInstance();
                        $sql = "select * from `books` order by num desc;";
                        $res = $db->read_one($sql);
                        echo "<h3><a href='book.php?bookid={$res['id']}' title='{$res['bookname']}' target='_blank'>{$res['bookname']}</a></h3>";
                        echo "<p class='author'>作者: {$res['author']}</p><p class='introduce'>{$res['abstract']}</p>";
                        echo "<span><a href='book.php?bookid={$res['id']}' target='_blank' title='{$res['bookname']}'><img src='.{$res['img']}' title='{$res['bookname']}' alt='{$res['bookname']}' class='bookCover lazy'></a></span>";
                    ?>
                </div>
                <div class="hamid">
                    <ul class="showMid">
                        <?php
                            require_once 'common/library/Db.php';
                            $db = Db::getInstance();
                            $sql = "select * from `books` order by num desc limit 2,6;";
                            $res = $db->read_all($sql);
                            for($i=0;$i<6;$i++){
                                if($i<3){
                                    echo "<li><a href='book.php?bookid={$res[$i]['id']}' target='_blank' title='{$res[$i]['bookname']}'><img src='.{$res[$i]['img']}'></a>";
                                    echo "<p class='bookName'><a href='book.php?bookid={$res[$i]['id']}' title='{$res[$i]['bookname']}'>{$res[$i]['bookname']}</a></p>";
                                    echo "<p>{$res[$i]['author']}</p></li>";
                                }else{
                                    echo "<li class='tb'><a href='book.php?bookid={$res[$i]['id']}' target='_blank' title='{$res[$i]['bookname']}'><img src='.{$res[$i]['img']}'></a>";
                                    echo "<p class='bookName'><a href='book.php?bookid={$res[$i]['id']}' title='{$res[$i]['bookname']}'>{$res[$i]['bookname']}</a></p>";
                                    echo "<p>{$res[$i]['author']}</p></li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hotbook">
            <div class="conBigTitle">
                <h2>免费图书</h2>
                <p>
                    <?php
                        require_once 'common/library/Db.php';
                        $db = Db::getInstance();
                        $sql = "select * from `book_type` order by by_hotnum desc ;";
                        $res = $db->read_all($sql);
                        for($i=0;$i<6;$i++){
                            echo "<a href='classification.php?id1={$res[$i]['by_id']}&id2=1&id3=0&page=1'>{$res[$i]['by_type']}</a>|";
                        }
                    ?>
                </p>
            </div>
            <div class="show">
                <div class="showLeft">
                    <?php
                        require_once 'common/library/Db.php';
                        $db = Db::getInstance();
                        $sql = "select * from `books` where `integral`=0 order by num desc ;";
                        $res = $db->read_one($sql);
                        echo "<h3><a href='book.php?bookid={$res['id']}' title='{$res['bookname']}' target='_blank'>{$res['bookname']}</a></h3>";
                        echo "<p class='author'>作者: {$res['author']}</p><p class='introduce'>{$res['abstract']}</p>";
                        echo "<span><a href='book.php?bookid={$res['id']}' target='_blank' title='{$res['bookname']}'><img src='.{$res['img']}' title='{$res['bookname']}' alt='{$res['bookname']}' class='bookCover lazy'></a></span>";
                    ?>
                </div>
                <div class="hamid">
                    <ul class="showMid">
                        <?php
                            require_once 'common/library/Db.php';
                            $db = Db::getInstance();
                            $sql = "select * from `books` where `integral`=0 order by num desc limit 2,6;";
                            $res = $db->read_all($sql);
                            for($i=0;$i<6;$i++){
                                if($i<3){
                                    echo "<li><a href='book.php?bookid={$res[$i]['id']}' target='_blank' title='{$res[$i]['bookname']}'><img src='.{$res[$i]['img']}'></a>";
                                    echo "<p class='bookName'><a href='book.php?bookid={$res[$i]['id']}' title='{$res[$i]['bookname']}'>{$res[$i]['bookname']}</a></p>";
                                    echo "<p>{$res[$i]['author']}</p></li>";
                                }else{
                                    echo "<li class='tb'><a href='book.php?bookid={$res[$i]['id']}' target='_blank' title='{$res[$i]['bookname']}'><img src='.{$res[$i]['img']}'></a>";
                                    echo "<p class='bookName'><a href='book.php?bookid={$res[$i]['id']}' title='{$res[$i]['bookname']}'>{$res[$i]['bookname']}</a></p>";
                                    echo "<p>{$res[$i]['author']}</p></li>";
                                }
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