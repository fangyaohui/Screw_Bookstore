<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div name="top01" class="div-allinline">
        <div name="subdiv-allinline" class="subdiv-allinline">
            <ul>
                <li>
                    <?php
                    include 'common/library/User.php';
                    session_start();
                    $user = unserialize($_SESSION['user']);
//                    $user = new User(['u_id'=>1]);
                    if(empty($user)){
                        echo "<a href='../view/login.html'>亲，请登录</a>";
                        echo " ". "<a href='../php/register.php'>免费注册</a>";
                    }else {
                        $username = $user->getUUsername();
                        echo "欢迎".$username."用户"."&nbsp&nbsp&nbsp&nbsp&nbsp";
                        echo "<a href='../php/login_out.php'>退出登录";
                    }
                    ?>
                </li>
            </ul>
        </div>
        <div name="subdiv-allinline" class="subdiv-allinline">
            <ul>
                <li><a href="#">&nbsp&nbsp&nbsp书店首页</a></li>
                <li><a href="#">&nbsp&nbsp&nbsp<img src="../img/userimg.png" width="15" height="15" style="vertical-align:middle"></img>个人中心</a></li>
                <li><a href="#">&nbsp&nbsp&nbsp<img src="../img/shoppingcar.png" width="15" height="15" style="vertical-align:middle"></img>购物车<?php echo "0";?></a></li>
                <li><a href="#">&nbsp&nbsp&nbsp<img src="../img/favorites.png" width="15" height="15" style="vertical-align:middle"></img>收藏夹</a></li>
            </ul>
        </div>
    </div>
</body>
</html>