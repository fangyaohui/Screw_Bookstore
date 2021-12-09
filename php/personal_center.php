<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/personal_center.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    <?php
        require_once 'common/top.php';
    ?>
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
    $u_id = $user->getUId();
    $db = Db::getInstance();
    $sql = "select * from `users` where `u_id`={$u_id}";
    $res = $db->read_one($sql);
    $username = $res['u_username'];
    ?>
    <div class="layout cf infor myBooks">
        <div class="inforLeft fl">
            <div class="inforLeftNav">
                <div class="headImg">
                    <img src="../img/readbook1.png">
                </div>
                <p class="account"><?php echo "{$username}";?></p>
                <p class="balance">积分：0积分</p>
                <ul>
                    <li>
                        <a href="" class="inforOn">我的图书</a>
                    </li>
                    <li>
                        <a href="">充值</a>
                    </li>
                    <li>
                        <a href="">充值记录</a>
                    </li>
                    <li>
                        <a href="index.php">首页</a>
                    </li>
                    <li>
                        <a href="shopping_cart.php">购物车</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inforRight fr">
            <div class="layout_h1">
                <div class="tabHead">
                    <span class="checkd aHspan">已购图书</span>
                </div>
            </div>
            <div class="tabBox">
                <div class="dis tabListBox">
                    <!--购书 情况 开始-->
                    <div class="noBuyBook" id="book">
                        <!--已购图书结束-->
                        <div class="tabBox1">
                            <ul class="tabListBox1 cf dis">
                                <?php
                                    require_once 'common/library/User.php';
                                    require_once 'common/library/Db.php';
                                    $db = Db::getInstance();
                                    $sql = "select * from `purchased` where `u_id`={$u_id}";
                                    $res = $db->read_all($sql);
                                    foreach ($res as $temp){
                                        $b_id = $temp['b_id'];
                                        $sql = "select * from `books` where `id`={$b_id}";
                                        $book = $db->read_one($sql);
                                        $img = $book['img'];
                                        echo "<li style='padding: 13px 13px 10px 10px'><img src='.{$img}' alt='{$book['bookname']}' title='{$book['bookname']}'></li>";
                                    }
                                ?>
                            </ul>
<!--                            <p class="nobuyPro">您还没有购买过图书哦</p>-->

                        </div>
                        <!--已购图书结束-->
                    </div>
                    <!--购书 情况 结束-->
                </div>				<!--公共分页-->
            </div>
        </div>
    </div>
</div>

</body>
</html>