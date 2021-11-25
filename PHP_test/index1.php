<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="index1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="blankhead">
    <div class="n1_header">
        <div class="n1_header_wrap">
            <h1>
                <a href="index1.php">
                    <img class="img" src="../img/logo.png" alt="logo" title="螺钉书城" height="60" width="150">
                </a>
            </h1>
            <div class="n1_headerR">
                <ul class="n1_nav">
                    <li class="current"><a href="#">首页</a></li>
                    <li><a href="#">分类</a></li>
                    <li><a href="#">排行</a></li>
                    <li><a href="#">购物车</a></li>
                    <li><a href="#">个人中心</a></li>
                </ul>
                <div class="n1_search">
                    <form action="#" method="post" name="" id="">
                        <input type="text" name="" placeholder="书名/作者名" autocomplete="off">
                        <input type="submit" value="搜索" height="10px" src="../img/find.png">
                    </form>
                    <ul class="list" id="search_suggestion_box" style="display: none;"></ul>
                </div>
                <div class="n1_login">
<!--                    <a href="../view/login.html">-->
<!--                        <span class="n1_login_beffor" id="unlogin_box" style="display: block;">登录</span>-->
<!--                    </a>-->
                        <select class="n1_login_affer" id="login_box" style="display: block;" onchange="window.location=this.value;">
                            <option value="http://www.baidu.com">方耀辉</option>
                            <option value="http://www.baidu.com">个人中心</option>
                            <option value="http://www.baidu.com">充值</option>
                            <option value="http://www.baidu.com">退出登录</option>
                        </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="recom">
    <div class="recomWrap">公告栏</div>
</div>
<div class="content">
    <div class="hotbook">
        <div class="conBigTitle">热门图书</div>
        <div class="show"></div>
    </div>
    <div class="sel_cir">
        <div class="conBigTitle">畅销图书</div>
        <div class="cirShow"></div>
    </div>
    <div class="freebook">
        <div class="conBigTitle">免费图书</div>
        <div class="show"></div>
    </div>
    <div class="newbook">
        <div class="conBigTitle">最新图书</div>
        <div class="show"></div>
    </div>
</div>
<div class="v1_foot">
    <div class="aboutcompany">底部栏</div>
    <div></div>
</div>

</body>
</html>