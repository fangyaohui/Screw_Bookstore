<div class="blankhead">
    <div class="n1_header">
        <div class="n1_header_wrap">
            <h1>
                <a href="index.php">
                    <img class="img" src="../img/logo.png" alt="logo" title="螺钉书城" height="60" width="150">
                </a>
            </h1>
            <div class="n1_headerR">
                <ul class="n1_nav">
                    <?php
                        $str = (string)$_SERVER['PHP_SELF'];
                    ?>
                    <li <?php if (strpos($str,'index')) echo "class=current";?>><a href="index.php"><b>首页</b></a></li>
                    <li <?php if (strpos($str,'classification')) echo "class=current";?>><a href="classification.php?id1=2&id2=0&id3=0&page=1"><b>分类</b></a></li>
                    <li <?php if (strpos($str,'rank')) echo "class=current";?>><a href="rank.php"><b>排行</b></a></li>
                    <li <?php if (strpos($str,'shopping_cart')) echo "class=current";?>><a href="shopping_cart.php"><b>购物车</b></a></li>
                    <li <?php if (strpos($str,'personal_center')) echo "class=current";?>><a href="personal_center.php"><b>个人中心</b></a></li>
                </ul>
                <div class="n1_search">
                    <form action="find_book.php?page=1" method="post" name="findbook">
                        <input type="text" name="keyword" placeholder="书名/作者名" autocomplete="off">
                        <input type="submit" value="搜索" height="10px" src="../img/find.png">
                    </form>
                    <ul class="list" id="search_suggestion_box" style="display: none;"></ul>
                </div>
                <div class="n1_login">
                    <?php
                    require 'common/library/User.php';
                    session_start();
                    $user = unserialize($_SESSION['user']);
                    if(empty($user)){
                        echo '<a href="../view/login.html"><span class="n1_login_beffor" id="unlogin_box" style="display: block;">登录</span></a>';
                    }else {
                        $username = $user->getUUsername();
                        echo '<select class="n1_login_affer" id="login_box" style="display: block;" onchange="window.location=this.value;">
                        <option value="http://www.baidu.com">' . $username.'</option>
                        <option value="personal_center.php">个人中心</option>
                        <option value="#">充值</option>
                        <option value="login_out.php">退出登录</option>
                    </select>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
