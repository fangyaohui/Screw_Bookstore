<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <style>
        body{
            overflow: hidden;
            text-align: center;
        }
        .car{
            width:65%;
            border-radius: 18px;
            margin-left: 300px;
            padding: 30px 0 0 0 ;
            margin: 0 auto;
        }
        .car .good{
            background-color: #F88020;
            height:55px;
            font-size: 22px;
            color:white;
            line-height: 55px;
            font-weight: 200;
            border-radius: 18px 18px 0 0;
            margin-bottom: 20px;

        }
        .car .good table{
            width:100%;
        }
        .car .goods{
            height:auto;
            line-height: 45px;
            font-size: 20px;
            font-weight: 200;
        }
        .car .goods table{
            width:100%;
        }
        .car .goods table .btn1{
            width: 70px;
            height:28px;
            border: 2px solid #46B3E6;
            background-color: white;
            color: #46B3E6;
            border-radius: 4px;
            font-weight: 600;
            transform: translateY(-3px);
        }
        .car .goods table button:hover{
            background-color: #46B3E6;
            color: white;
        }
        .car .goods1{
            margin-top: 10px;
            background-color: ;
            height:50px;
            font-size: 19px;
            color:white;
            line-height: 50px;
            font-weight: 200;
            border-radius:0 0 10px 10px ;
        }
        .car .goods2{
            border-top: 1px solid #F88020;
            margin-top: 10px;
            height:50px;
            font-size: 19px;
            line-height: 45px;
            font-weight: 200;
            border-radius:0 0 10px 30px ;
            padding-left: 50px;
        }
        .car .goods1 table{
            width:100%;
        }
        .car .goods1 .btn2{
            width: 70px;
            height:28px;
            border: 2px solid #21BF73;
            background-color: white;
            color: #21BF73;
            border-radius: 4px;
            font-weight: 600;
        }
        .car .goods1 .btn2:hover{
            color:white;
            background-color: #21BF73;
        }
        .car .goods1 .btn3{
            width: 80px;
            height:30px;
            border: 2px solid #FF0000;
            background-color: white;
            color: #FF0000;
            border-radius: 4px;
            font-weight: 600;
        }
        .car .goods1 .btn3:hover{
            color:white;
            background-color:#FF0000 ;
        }
        .car .goods3{
            border-top: 1px solid #F88020;
            padding-top: 10px ;
            height:auto;
            line-height: 45px;
            font-size: 20px;
            font-weight: 200;
        }
        .car .goods3 table{
            width:100%;
        }
        .car .goods3 table .btn1{
            width: 70px;
            height:28px;
            border: 2px solid #46B3E6;
            background-color: white;
            color: #46B3E6;
            border-radius: 4px;
            font-weight: 600;
            transform: translateY(-3px);
        }
        .car .goods3 table button:hover{
            background-color: #46B3E6;
            color: white;
        }
        h2{
            text-align: center;
            align-content: center;
            font-size: 30px;
            font-family: 楷体;
            padding:40px 0 5px 0;
        }
    </style>
</head>
<body>
<div>

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
                        <li ><a href="index.php"><b>首页</b></a></li>
                        <li ><a href="classification.php"><b>分类</b></a></li>
                        <li ><a href="rank.php"><b>排行</b></a></li>
                        <li class="current"><a href="shopping_cart.php"><b>购物车</b></a></li>
                        <li><a href="personal_center.php"><b>个人中心</b></a></li>
                    </ul>
                    <div class="n1_search">
                        <form action="#" method="post" name="" id="">
                            <input type="text" name="" placeholder="书名/作者名" autocomplete="off">
                            <input type="submit" value="搜索" height="10px" src="../img/find.png">
                        </form>
                        <ul class="list" id="search_suggestion_box" style="display: none;"></ul>
                    </div>
                    <div class="n1_login">
                        <?php
                        include 'common/library/User.php';
                        @session_start();
                        $user = unserialize($_SESSION['user']);
                        if(empty($user)){
                            echo '<a href="../view/login.html"><span class="n1_login_beffor" id="unlogin_box" style="display: block;">登录</span></a>';
                        }else {
                            $username = $user->getUUsername();
                            echo '<select class="n1_login_affer" id="login_box" style="display: block;" onchange="window.location=this.value;">
                        <option value="http://www.baidu.com">' . $username.'</option>
                        <option value="http://www.baidu.com">个人中心</option>
                        <option value="http://www.baidu.com">充值</option>
                        <option value="login_out.php">退出登录</option>
                    </select>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2><b>订单页面</b></h2>
    <div class="car">
        <div class="good">
            <table><tr><td width=30%>商品名称</td><td width=20%>单价</td><td width=20%>数量</td><td width=30%>操作</td></tr></table>
        </div>
        <div class="goods">
            <table>
                <tr>
                    <td width=30%>旁氏洗发露</td>
                    <td width=20%>99</td><td width=20%>1</td>
                    <td width=30%><a><button class="btn1">删除</button></a></td>
                </tr>
                <tr>
                    <td width=30%>旁氏洗发露</td>
                    <td width=20%>99</td><td width=20%>1</td>
                    <td width=30%><a><button class="btn1">删除</button></a></td>
                </tr>
            </table>
        </div>
        <div class="goods3">
            <table>
                <tr>
                    <td width="30%">收货地址</td>
                    <td width="40%">地址</td>
                    <td width="30%"><button class="btn1">添加地址</button></td>
                </tr>
            </table>
        </div>
        <div class="goods3">
            <table>
                <tr>
                    <td width="30%"></td>
                    <td width="40%">小计：</td>
                    <td width="30%">总数：</td>
                </tr>
            </table>
        </div>
        <div class="goods1">
            <table>
                <tr>
                    <td width=50%>
                        <button class="btn2">确认购买</button>
                    </td>
                    <td>
                        button class="btn3">全部清空</button>
                    </td>
                </tr>
            </table>
        </div>
        
    </div>
</div>

</body>
</html>