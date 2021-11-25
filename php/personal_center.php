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
                        <li><a href="shopping_cart.php"><b>购物车</b></a></li>
                        <li class="current"><a href="personal_center.php"><b>个人中心</b></a></li>
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
                        session_start();
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
    <div class="layout cf infor myBooks">
        <div class="inforLeft fl">
            <div class="inforLeftNav">
                <div class="headImg">
                    <img src="https://fs-uc-nearme-com-cn.oss-cn-hangzhou.aliyuncs.com/518/262/273/372262815.jpg">
                </div>
                <p class="account">151******22</p>
                <p class="balance">余额：0阅饼					| 0代金券				</p>
                <ul>
                    <li>
                        <a href="//www.ireader.com.cn/index.php?ca=User.Index&amp;pca=User.Index" class="inforOn">我的图书</a>
                    </li>
                    <li>
                        <a href="//ah2.ireader.com/zytc/public/index.php?ca=Svip.Order&amp;projectSource=zypc&amp;pca=User.Index">我的VIP</a>
                    </li>
                    <li>
                        <a href="//www.ireader.com.cn/index.php?ca=Recharge_Index.Index&amp;pca=User.Index">充值</a>
                    </li>
                    <li>
                        <a href="//www.ireader.com.cn/index.php?ca=Recharge.getRecord&amp;pca=User.Index">充值记录</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inforRight fr">
            <div class="layout_h1">
                <div class="tabHead">
                    <span class="checkd aHspan" onclick="goUrl('book');">已购图书</span><em class="fl">|</em>
                    <span onclick="goUrl('record');">消费记录</span>
                </div>
            </div>
            <div class="tabBox">
                <div class="dis tabListBox">
                    <!--购书 情况 开始-->
                    <div class="noBuyBook" id="book">
                        <!--已购图书结束-->
                        <div class="tabBox1">
                            <ul class="tabListBox1 cf dis">

                            </ul>
                            <p class="nobuyPro">您还没有购买过图书哦</p>

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