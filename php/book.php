<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/book.css" rel="stylesheet" type="text/css">
    <script>
        function fang(){
            window.location = "order.php";
        }
    </script>
</head>
<body>
<div>
    <?php
    require_once 'common/top.php';
    require_once 'common/function.php';
    require_once 'common/library/Db.php';
    session_start();
    $user = unserialize($_SESSION['user']);
    if(empty($user)){
        echo alert("您还未登录，点击确定前往登录","../view/login.html");
        return ;
    }
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
    <div class="content">
        <div class="bookInfor">
            <div class="bookL">
                <a>

                    <img src=".<?php echo "{$res['img']}";?>" alt="<?php echo "{$res['bookname']}";?>" title="<?php echo "{$res['bookname']}";?>">
                </a>
            </div>
            <div class="bookR">
                <div class="bookinf01">
                    <div class="bookname">
                        <h2><a><?php echo "{$bookname}"?></a></h2>
                        <span><?php $ans = $praise/100;$ans *= 2;echo "{$ans}"?></span>                </div>
                    <p>
                        <span class="author" style="margin-right: 12px; font-size: 14px;">作者：<?php echo "{$author}"?></span>
                        <span style="margin-right: 12px;font-size: 14px;">粉丝数：<b><?php echo "{$num}"?></b></span>
                        <span style="margin-right: 12px;font-size: 14px;">点赞数：<b><?php echo "{$praise}"?></b></span>
                        <span class="manyMan"><?php echo "{$praise}"?>人评分</span>                                    </p>
                </div>
                <div class="bookinf02">
                    <div class="left">
                        <p>
                            <i class="price">价格：<?php echo "{$integral}"?>积分</i>
                        </p>
                        <a href="read_book.php?<?php  echo "bookid={$bookid}"?>" target="_blank" data-js="readNow" class="readNow">
                            <span class="tryRead">免费试读</span>
                        </a>
                        <a data-js="readNow" class="readNow" href="<?php echo "add_shopping_cart.php?bookid={$bookid}"?>">
                            <span class="buyBook" data-js="viewall">加入购物车</span>
                        </a>
                        <a data-js="readNow" class="readNow" href="<?php echo "purchase.php?bookid={$bookid}";?>">
                            <span class="buyBook" data-js="viewall">购买</span>
                        </a>
                    </div>
                </div>
                <div class="bookinf03">
                    <p style="font-size: 16px;font-family: 楷体;">
                        <?php echo "{$abstract}..."?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sqCon">
        <div class="bookCir">
            <div class="title">
                <p>
                    <span class="shuquan">书圈</span>
                    <span class="line">|</span>
                    <span>共6801人，284条</span>
                </p>
            </div>
            <div class="allCom" style="display: block;">
                <ul>
                    <div class="photo">
                        <img src="../img/touxiang.png"  style="border-radius: 50%;" >
                    </div>
                    <div class="comment-block">
                        <p style="font-size: 19px;font-family: 楷体;transform: translateY(-10px)"><?php echo "{$user->getUUsername()}";?></p>
                        <form action="submit_message.php" method="post" style="transform: translateY(-10px)">
                            <input name="book_id" type="hidden" value="<?php echo $bookid;?>">
                            <textarea name="comment" cols="8" rows="8" placeholder="说说您的看法，不超过300字..."></textarea>
                            <input type="submit" value="提交评论" style="height: auto;width: 835px;display: block;">
                        </form>
                    </div>
                    <?php
                        $sql = "select * from `comment` where b_id={$bookid}";
                        $res = $db->read_all($sql);
                        foreach($res as $temp){
                            $u_id = $temp['u_id'];
                            $comment = $temp['comment'];
                            $time = $temp['time'];
                            $sql = "select u_username from `users` where u_id = {$u_id}";
                            $data = $db->read_one($sql);
                            echo "<li><div class='allCom'><div class='ComMan'><p>{$data['u_username']}:</p><span>{$time}</span></div>";
                            echo "<div class='comTxt'><span><s></s><i>{$comment}</i></span></div></div></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="v1_foot">
        <div class="aboutcompany"></div>
    </div>
</div>
</body>
</html>