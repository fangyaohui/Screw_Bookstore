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
                        <li class="current"><a href="rank.php"><b>排行</b></a></li>
                        <li><a href="shopping_cart.php"><b>购物车</b></a></li>
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
                        <li>
                            <dl class="close">
                                <dt>1</dt>
                                <dd>
                                    <i>我们的中国（全四册）</i>
                                    <span><s></s>9</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>2</dt>
                                <dd>
                                    <i>李银河说爱情</i>
                                    <span><s></s>26</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>3</dt>
                                <dd>
                                    <i>生命因你而火热</i>
                                    <span><s></s>2</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>4</dt>
                                <dd>
                                    <i>政治秩序的起源：从前人类时代到法国大革命</i>
                                    <span><s></s>31</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>5</dt>
                                <dd>
                                    <i>谁在收藏中国</i>
                                    <span><s></s>2</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>6</dt>
                                <dd>
                                    <i>全球通史：从史前到21世纪（第7版新校本）上册</i>
                                    <span><s></s>121</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>7</dt>
                                <dd>
                                    <i>82年生的金智英</i>
                                    <span><s></s>29</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>8</dt>
                                <dd>
                                    <i>麦田里的守望者</i>
                                    <span><s></s>107</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>9</dt>
                                <dd>
                                    <i>东言西语</i>
                                    <span><s></s>15</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>10</dt>
                                <dd>
                                    <i>政治秩序的起源：从前人类时代到法国大革命</i>
                                    <span><s></s>31</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="KindsRank">
                    <h3>
                        <span></span>
                        <a href="//www.ireader.com.cn/index.php?ca=bookrank.ranklist&amp;pca=bookrank.index&amp;rankId=14877" target="_blank">掌阅畅销</a>
                    </h3>
                    <ul>
                        <li>
                            <dl class="close">
                                <dt>1</dt>
                                <dd>
                                    <i>我们的中国（全四册）</i>
                                    <span><s></s>9</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>2</dt>
                                <dd>
                                    <i>李银河说爱情</i>
                                    <span><s></s>26</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>3</dt>
                                <dd>
                                    <i>生命因你而火热</i>
                                    <span><s></s>2</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>4</dt>
                                <dd>
                                    <i>政治秩序的起源：从前人类时代到法国大革命</i>
                                    <span><s></s>31</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>5</dt>
                                <dd>
                                    <i>谁在收藏中国</i>
                                    <span><s></s>2</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>6</dt>
                                <dd>
                                    <i>全球通史：从史前到21世纪（第7版新校本）上册</i>
                                    <span><s></s>121</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>7</dt>
                                <dd>
                                    <i>82年生的金智英</i>
                                    <span><s></s>29</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>8</dt>
                                <dd>
                                    <i>麦田里的守望者</i>
                                    <span><s></s>107</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>9</dt>
                                <dd>
                                    <i>东言西语</i>
                                    <span><s></s>15</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>10</dt>
                                <dd>
                                    <i>政治秩序的起源：从前人类时代到法国大革命</i>
                                    <span><s></s>31</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="KindsRank">
                    <h3>
                        <span></span>
                        <a href="//www.ireader.com.cn/index.php?ca=bookrank.ranklist&amp;pca=bookrank.index&amp;rankId=15049" target="_blank">新书上榜</a>
                    </h3>
                    <ul>
                        <li>
                            <dl class="close">
                                <dt>1</dt>
                                <dd>
                                    <i>我们的中国（全四册）</i>
                                    <span><s></s>9</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>2</dt>
                                <dd>
                                    <i>李银河说爱情</i>
                                    <span><s></s>26</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>3</dt>
                                <dd>
                                    <i>生命因你而火热</i>
                                    <span><s></s>2</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>4</dt>
                                <dd>
                                    <i>政治秩序的起源：从前人类时代到法国大革命</i>
                                    <span><s></s>31</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>5</dt>
                                <dd>
                                    <i>谁在收藏中国</i>
                                    <span><s></s>2</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>6</dt>
                                <dd>
                                    <i>全球通史：从史前到21世纪（第7版新校本）上册</i>
                                    <span><s></s>121</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>7</dt>
                                <dd>
                                    <i>82年生的金智英</i>
                                    <span><s></s>29</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>8</dt>
                                <dd>
                                    <i>麦田里的守望者</i>
                                    <span><s></s>107</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>9</dt>
                                <dd>
                                    <i>东言西语</i>
                                    <span><s></s>15</span>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="close">
                                <dt>10</dt>
                                <dd>
                                    <i>政治秩序的起源：从前人类时代到法国大革命</i>
                                    <span><s></s>31</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="v1_foot">
        <div class="aboutcompany">底部栏</div>
    </div>
</div>

</body>
</html>