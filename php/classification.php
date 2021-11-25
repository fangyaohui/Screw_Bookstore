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
                        <li class="current"><a href="#"><b>分类</b></a></li>
                        <li><a href="rank.php"><b>排行</b></a></li>
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
    <!--        选择部分    -->
        <div class="genre">
            <div class="difgenre">
                <span class="left">频道</span>
                <div class="right">
                    <ul>
                        <li class="current"><a href="//www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92">出版</a></li>
                        <li><a href="//www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=10" class="a1">男频</a></li>
                        <li><a href="//www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=68" class="a1">女频</a></li>
                    </ul>
                </div>
            </div>
            <div class="difgenre1">
                <span class="left1">类型</span>
                <div class="right1">
                    <ul >
                        <li class="current" data-id="93"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=0">小说</a></li>
                        <li data-id="113"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=113&amp;order=download&amp;status=0">文学</a></li>
                        <li data-id="142"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=142&amp;order=download&amp;status=0">历史</a></li>
                        <li data-id="127"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=127&amp;order=download&amp;status=0">传记</a></li>
                        <li data-id="447"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=447&amp;order=download&amp;status=0">青春</a></li>
                        <li data-id="198"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=198&amp;order=download&amp;status=0">励志</a></li>
                        <li data-id="179"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=179&amp;order=download&amp;status=0">社科</a></li>
                        <li data-id="168"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=168&amp;order=download&amp;status=0">心理</a></li>
                        <li data-id="212"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=212&amp;order=download&amp;status=0">经济</a></li>
                        <li data-id="448"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=448&amp;order=download&amp;status=0">管理</a></li>
                        <li data-id="113"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=113&amp;order=download&amp;status=0">文学</a></li>
                        <li data-id="142"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=142&amp;order=download&amp;status=0">历史</a></li>
                        <li data-id="127"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=127&amp;order=download&amp;status=0">传记</a></li>
                        <li data-id="447"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=447&amp;order=download&amp;status=0">青春</a></li>
                        <li data-id="198"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=198&amp;order=download&amp;status=0">励志</a></li>
                        <li data-id="179"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=179&amp;order=download&amp;status=0">社科</a></li>
                        <li data-id="168"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=168&amp;order=download&amp;status=0">心理</a></li>
                        <li data-id="212"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=212&amp;order=download&amp;status=0">经济</a></li>
                        <li data-id="448"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=448&amp;order=download&amp;status=0">管理</a></li>
                        <li data-id="113"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=113&amp;order=download&amp;status=0">文学</a></li>
                        <li data-id="142"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=142&amp;order=download&amp;status=0">历史</a></li>
                        <li data-id="127"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=127&amp;order=download&amp;status=0">传记</a></li>
                        <li data-id="447"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=447&amp;order=download&amp;status=0">青春</a></li>
                        <li data-id="198"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=198&amp;order=download&amp;status=0">励志</a></li>
                        <li data-id="179"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=179&amp;order=download&amp;status=0">社科</a></li>
                        <li data-id="168"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=168&amp;order=download&amp;status=0">心理</a></li>
                        <li data-id="212"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=212&amp;order=download&amp;status=0">经济</a></li>
                        <li data-id="448"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=448&amp;order=download&amp;status=0">管理</a></li>
                        <li data-id="93"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=0">小说</a></li>
                        <li data-id="113"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=113&amp;order=download&amp;status=0">文学</a></li>
                        <li data-id="142"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=142&amp;order=download&amp;status=0">历史</a></li>
                        <li data-id="127"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=127&amp;order=download&amp;status=0">传记</a></li>
                        <li data-id="447"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=447&amp;order=download&amp;status=0">青春</a></li>
                        <li data-id="198"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=198&amp;order=download&amp;status=0">励志</a></li>
                        <li data-id="179"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=179&amp;order=download&amp;status=0">社科</a></li>
                        <li data-id="168"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=168&amp;order=download&amp;status=0">心理</a></li>
                        <li data-id="212"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=212&amp;order=download&amp;status=0">经济</a></li>
                        <li data-id="448"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=448&amp;order=download&amp;status=0">管理</a></li>
                        <li data-id="113"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=113&amp;order=download&amp;status=0">文学</a></li>
                        <li data-id="142"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=142&amp;order=download&amp;status=0">历史</a></li>
                        <li data-id="127"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=127&amp;order=download&amp;status=0">传记</a></li>

                    </ul>
                </div>
            </div>
            <div class="difgenre other">
                <span class="left">其他</span>
                <div class="right">
                    <ul>
                        <li class="current"><a>全部</a></li>
                        <li><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=1">免费</a></li>
                        <li><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=2">特价</a></li>
                        <li><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=4">VIP</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="showTitle">
            <span class="hot current"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=0">热门</a></span>
            <span class="new"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=update&amp;status=0">最新</a></span>
            <span class="comment"><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=score&amp;status=0">好评</a></span>
            <p>
                <a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=update&amp;status=0&amp;page=50" class="leftArro"><s></s></a>
                第<i>1</i>页
                <a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=update&amp;status=0&amp;page=2" class="rightArro"><s></s></a>
            </p>
        </div>
        <div class="show">
            <ul class="newShow">
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/6392dc14/group61/M00/3D/C4/CmQUOV9F3jeEB776AAAAABLv6Aw510260432.jpg?v=ffVFTZyx&amp;t=CmQUOV9F3jc." alt="全世界最好的叶先生">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">全世界最好的叶先生</a></h3>
                        <p class="tryread">虞美人						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>365

                                                    </span>
                        <p class="introduce">爱过，伤过，纠缠过，白悠悠决定放弃了。给心爱的人自由，也还她一个自由！可为什么她放弃了，他却开始百般纠缠……“虐妻一时爽，追妻火葬场”，霸道总裁叶先生，化身成为宠妻狂魔，转眼便是全世界最好的叶先生……</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/e4e33e00/group61/M00/3D/75/CmQUOF9F4FaEFMAwAAAAAKe3XR0317567864.jpg?v=PL8bG60O&amp;t=CmQUOF9F4FY." alt="他的小哑妻">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">他的小哑妻</a></h3>
                        <p class="tryread">曲木子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>199

                                                    </span>
                        <p class="introduce">父亲被杀、母亲失踪，她毫不设防地上了游艇，却被“深爱”自己的名导未婚夫按进海里溺水而亡！著名女影星的死讯火速登上各大热搜……
                            重生归来，她成了又疯又哑的苏家二小姐，是整个阳城的笑话所在。还莫名扣上了一纸婚约，被送进那位阎王爷的婚房。
                            “秦城阳你放手！你不是不想娶我吗？”
                            “哦，现在想了。”
                            之后日日夜夜的抵死交缠，复仇之路突然多了一个甩都甩不掉的霸道帮手，她才明白这场爱欲，是彻底逃不掉了。
                            他按着她入怀：“老婆，有什么仇，我帮你报。”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/81dd01be/group61/M00/35/63/CmQUOV2dhwaEWK7YAAAAAB9r160784958460.jpg?v=0QcalPWn&amp;t=CmQUOV6Ixj0." alt="分手妻约">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">分手妻约</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>2015

                                                    </span>
                        <p class="introduce">做他情人三个月，他提出分手，她如弃妇一般砸了他的办公室。
                            他冷漠而无情，“你该知道，我不喜欢缠人的女人。”
                            再见面，她周旋于一班公子哥之间游刃有余，他看她的眼神仿佛是要掐死她一样！原来她人前假装伤心，人后照样风花雪月！
                            嗨，莫先生，不是说好的分手快乐？
                            谁知道，他却向她提出结婚，直接领证盖章！……
                            媒体传闻，莫家大少体弱多病，有算命师曾预言他会短命。女人眼中，莫家大少容颜俊美，堪称天下无双。整个家族，莫家大少与人交好与世无争。可就是这个最无害的人，将莫氏集团玩弄于鼓掌之中。
                            更甚至，亲手将她送进监狱！
                            法庭上她纵声大笑，这一刻，她没有亲人没有朋友没有爱人，一无所有！
                            她对着所有人宣布，“我有罪！”
                            爱上一个人，是所有开始的原罪！
                            【 板栗频道 强推好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/7c148829/group61/M00/18/28/CmQUOF87WRSECCj9AAAAAGv3sVc473928828.jpg?v=Kqz1Cp8c&amp;t=CmQUOF87WRQ." alt="他似月光太薄凉">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">他似月光太薄凉</a></h3>
                        <p class="tryread">淡浅淡狸						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>143

                                                    </span>
                        <p class="introduce">霍瓷爱溥云澜，爱的失去自我，换来的却是溥云澜无情的对待和迫害。一纸离婚协议，将两人支离破碎的婚姻彻底结束。
                            霍瓷问溥云澜：“你可曾爱过我，哪怕一点点？”
                            溥云澜：“从未！”
                            霍瓷知道，自己对溥云澜的爱，到此为止。
                            离婚后，霍瓷成为知名的设计师。再次和溥云澜重逢，已然不是当初那个追在溥云澜身后的女人，她挽着别人的手，对他巧笑嫣然。
                            溥云澜在那一刻才知道，有些爱，早已经深入骨髓，如同跗骨之蛆！</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/4c16af9d/group61/M00/35/5A/CmQUOF2dhI2EeMSrAAAAAEiUl7k457483460.jpg?v=pky8A1kh&amp;t=CmQUOF6Ixj0." alt="天嫁之合">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">天嫁之合</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>1194

                                                    </span>
                        <p class="introduce">所有人都知道，她暗恋崇拜他十年之久。他是唐氏家族的二少，豪门第一继承人，传说中神一般的天之骄子唐仁修……她苦苦单恋，最终惨败结局！
                            可在唐家二少眼里，却是另外一个版本——小娇妻好傻萌，小娇妻不上钩！小娇妻真难撩，小娇妻逃走了！好不容易逮住她，想尽办法才成功上位娶到她！唐二少抱着心上人一阵感慨，这是多么苦逼的南泥湾式的恋爱史啊……
                            某天，一位好心人八卦问，“你们是怎么认识的？”唐二少悲壮的说出经过，总结以下两句话：“在大学里，她偷偷追了我好几天。不过后来，我追了她好几年。”
                            【 板栗频道 高分好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/8821946b/group61/M00/5C/D6/CmQUOF9ysp-EdyXrAAAAAHGNXB8141002944.jpg?v=hu4r2TGi&amp;t=CmQUOF9ysp8." alt="一顾情深，念念似海">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">一顾情深，念念似海</a></h3>
                        <p class="tryread">四喜丸子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>231

                                                    </span>
                        <p class="introduce">他霸道强势，如同帝王般不可一世，却唯独视她如命。
                            人尽皆知，顾先生是个高傲冷峻的主儿。某私家别墅里，顾洺衍撇撇嘴，一把抢过勺子：“我也要喂。”
                            人尽皆知，顾先生是个视女人如粪土的主儿。某生日宴会上，顾洺衍左顾右盼，劈手夺过寿星的话筒：“顾太太，你先生在找你。”
                            人尽皆知，顾先生是个心狠手辣的主儿。某新闻发布会上，顾洺衍眉目温柔，揽着顾太太的腰：“你们说话的声音小点，我太太有点困。”
                            他是魔鬼撒旦，也是她的守护神。
                            他是科技天才，也是她的顾三岁。
                            一朝抱上床，十年不松手。</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/aaf0562f/group61/M00/11/C0/CmQUOF8ztDSEbwieAAAAADu8naQ742392527.jpg?v=MTQr83ns&amp;t=CmQUOF8ztDQ." alt="陆先生的宠妻日常">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">陆先生的宠妻日常</a></h3>
                        <p class="tryread">杜灵兮						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>174

                                                    </span>
                        <p class="introduce">一夜春风，陆良辰娶了许岚，许岚也见色起意，一头扎进了婚姻的围城里。婚后各路情敌上门，还要对付各种太太团。许岚头疼，“这个陆太太你们爱谁当谁当，我不当了！”谁知，一年后，陆良辰堵在她身前，“老婆，该回家了。”许岚：“……？？”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/d9197b53/group61/M00/C2/36/CmQUOVzUHOqETdKHAAAAAGR8IG4538755830.jpg?v=CZw_6H7H&amp;t=CmQUOV6IySE." alt="宫阙：海青拿天鹅唯美甜宠系列">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">宫阙：海青拿天鹅唯美甜宠系列</a></h3>
                        <p class="tryread">海青拿天鹅						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>625

                                                    </span>
                        <p class="introduce">古言大神海青拿天鹅5部唯美甜宠经典代表作，分别讲述了5个不同时代的爱情故事。“白芍”：上古时期天庭第一风流神君PK史上最萌天狗。“殷商玄鸟纪”：完美再现浓郁殷商古朴之风，讲述一段“诗经”里才有的热烈而又质朴的爱恋。“双阙”：西周时期杞国国君之女在两位同样优秀性格却完全不同的男人之间艰难抉择。“嫤语书年”：乱世枭雄PK心机贵女，是你知道的三国，却有你不知道的浪漫。“春莺啭”：世间男子，莫如东洲明珠西京玉，一卷读罢，难舍魏晋翩翩君子风。
                            【 板栗自出版 品质好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/6392dc14/group61/M00/3D/C4/CmQUOV9F3jeEB776AAAAABLv6Aw510260432.jpg?v=ffVFTZyx&amp;t=CmQUOV9F3jc." alt="全世界最好的叶先生">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">全世界最好的叶先生</a></h3>
                        <p class="tryread">虞美人						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>365

                                                    </span>
                        <p class="introduce">爱过，伤过，纠缠过，白悠悠决定放弃了。给心爱的人自由，也还她一个自由！可为什么她放弃了，他却开始百般纠缠……“虐妻一时爽，追妻火葬场”，霸道总裁叶先生，化身成为宠妻狂魔，转眼便是全世界最好的叶先生……</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/e4e33e00/group61/M00/3D/75/CmQUOF9F4FaEFMAwAAAAAKe3XR0317567864.jpg?v=PL8bG60O&amp;t=CmQUOF9F4FY." alt="他的小哑妻">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">他的小哑妻</a></h3>
                        <p class="tryread">曲木子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>199

                                                    </span>
                        <p class="introduce">父亲被杀、母亲失踪，她毫不设防地上了游艇，却被“深爱”自己的名导未婚夫按进海里溺水而亡！著名女影星的死讯火速登上各大热搜……
                            重生归来，她成了又疯又哑的苏家二小姐，是整个阳城的笑话所在。还莫名扣上了一纸婚约，被送进那位阎王爷的婚房。
                            “秦城阳你放手！你不是不想娶我吗？”
                            “哦，现在想了。”
                            之后日日夜夜的抵死交缠，复仇之路突然多了一个甩都甩不掉的霸道帮手，她才明白这场爱欲，是彻底逃不掉了。
                            他按着她入怀：“老婆，有什么仇，我帮你报。”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/81dd01be/group61/M00/35/63/CmQUOV2dhwaEWK7YAAAAAB9r160784958460.jpg?v=0QcalPWn&amp;t=CmQUOV6Ixj0." alt="分手妻约">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">分手妻约</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>2015

                                                    </span>
                        <p class="introduce">做他情人三个月，他提出分手，她如弃妇一般砸了他的办公室。
                            他冷漠而无情，“你该知道，我不喜欢缠人的女人。”
                            再见面，她周旋于一班公子哥之间游刃有余，他看她的眼神仿佛是要掐死她一样！原来她人前假装伤心，人后照样风花雪月！
                            嗨，莫先生，不是说好的分手快乐？
                            谁知道，他却向她提出结婚，直接领证盖章！……
                            媒体传闻，莫家大少体弱多病，有算命师曾预言他会短命。女人眼中，莫家大少容颜俊美，堪称天下无双。整个家族，莫家大少与人交好与世无争。可就是这个最无害的人，将莫氏集团玩弄于鼓掌之中。
                            更甚至，亲手将她送进监狱！
                            法庭上她纵声大笑，这一刻，她没有亲人没有朋友没有爱人，一无所有！
                            她对着所有人宣布，“我有罪！”
                            爱上一个人，是所有开始的原罪！
                            【 板栗频道 强推好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/7c148829/group61/M00/18/28/CmQUOF87WRSECCj9AAAAAGv3sVc473928828.jpg?v=Kqz1Cp8c&amp;t=CmQUOF87WRQ." alt="他似月光太薄凉">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">他似月光太薄凉</a></h3>
                        <p class="tryread">淡浅淡狸						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>143

                                                    </span>
                        <p class="introduce">霍瓷爱溥云澜，爱的失去自我，换来的却是溥云澜无情的对待和迫害。一纸离婚协议，将两人支离破碎的婚姻彻底结束。
                            霍瓷问溥云澜：“你可曾爱过我，哪怕一点点？”
                            溥云澜：“从未！”
                            霍瓷知道，自己对溥云澜的爱，到此为止。
                            离婚后，霍瓷成为知名的设计师。再次和溥云澜重逢，已然不是当初那个追在溥云澜身后的女人，她挽着别人的手，对他巧笑嫣然。
                            溥云澜在那一刻才知道，有些爱，早已经深入骨髓，如同跗骨之蛆！</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/4c16af9d/group61/M00/35/5A/CmQUOF2dhI2EeMSrAAAAAEiUl7k457483460.jpg?v=pky8A1kh&amp;t=CmQUOF6Ixj0." alt="天嫁之合">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">天嫁之合</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>1194

                                                    </span>
                        <p class="introduce">所有人都知道，她暗恋崇拜他十年之久。他是唐氏家族的二少，豪门第一继承人，传说中神一般的天之骄子唐仁修……她苦苦单恋，最终惨败结局！
                            可在唐家二少眼里，却是另外一个版本——小娇妻好傻萌，小娇妻不上钩！小娇妻真难撩，小娇妻逃走了！好不容易逮住她，想尽办法才成功上位娶到她！唐二少抱着心上人一阵感慨，这是多么苦逼的南泥湾式的恋爱史啊……
                            某天，一位好心人八卦问，“你们是怎么认识的？”唐二少悲壮的说出经过，总结以下两句话：“在大学里，她偷偷追了我好几天。不过后来，我追了她好几年。”
                            【 板栗频道 高分好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/8821946b/group61/M00/5C/D6/CmQUOF9ysp-EdyXrAAAAAHGNXB8141002944.jpg?v=hu4r2TGi&amp;t=CmQUOF9ysp8." alt="一顾情深，念念似海">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">一顾情深，念念似海</a></h3>
                        <p class="tryread">四喜丸子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>231

                                                    </span>
                        <p class="introduce">他霸道强势，如同帝王般不可一世，却唯独视她如命。
                            人尽皆知，顾先生是个高傲冷峻的主儿。某私家别墅里，顾洺衍撇撇嘴，一把抢过勺子：“我也要喂。”
                            人尽皆知，顾先生是个视女人如粪土的主儿。某生日宴会上，顾洺衍左顾右盼，劈手夺过寿星的话筒：“顾太太，你先生在找你。”
                            人尽皆知，顾先生是个心狠手辣的主儿。某新闻发布会上，顾洺衍眉目温柔，揽着顾太太的腰：“你们说话的声音小点，我太太有点困。”
                            他是魔鬼撒旦，也是她的守护神。
                            他是科技天才，也是她的顾三岁。
                            一朝抱上床，十年不松手。</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/aaf0562f/group61/M00/11/C0/CmQUOF8ztDSEbwieAAAAADu8naQ742392527.jpg?v=MTQr83ns&amp;t=CmQUOF8ztDQ." alt="陆先生的宠妻日常">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">陆先生的宠妻日常</a></h3>
                        <p class="tryread">杜灵兮						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>174

                                                    </span>
                        <p class="introduce">一夜春风，陆良辰娶了许岚，许岚也见色起意，一头扎进了婚姻的围城里。婚后各路情敌上门，还要对付各种太太团。许岚头疼，“这个陆太太你们爱谁当谁当，我不当了！”谁知，一年后，陆良辰堵在她身前，“老婆，该回家了。”许岚：“……？？”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/d9197b53/group61/M00/C2/36/CmQUOVzUHOqETdKHAAAAAGR8IG4538755830.jpg?v=CZw_6H7H&amp;t=CmQUOV6IySE." alt="宫阙：海青拿天鹅唯美甜宠系列">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">宫阙：海青拿天鹅唯美甜宠系列</a></h3>
                        <p class="tryread">海青拿天鹅						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>625

                                                    </span>
                        <p class="introduce">古言大神海青拿天鹅5部唯美甜宠经典代表作，分别讲述了5个不同时代的爱情故事。“白芍”：上古时期天庭第一风流神君PK史上最萌天狗。“殷商玄鸟纪”：完美再现浓郁殷商古朴之风，讲述一段“诗经”里才有的热烈而又质朴的爱恋。“双阙”：西周时期杞国国君之女在两位同样优秀性格却完全不同的男人之间艰难抉择。“嫤语书年”：乱世枭雄PK心机贵女，是你知道的三国，却有你不知道的浪漫。“春莺啭”：世间男子，莫如东洲明珠西京玉，一卷读罢，难舍魏晋翩翩君子风。
                            【 板栗自出版 品质好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/6392dc14/group61/M00/3D/C4/CmQUOV9F3jeEB776AAAAABLv6Aw510260432.jpg?v=ffVFTZyx&amp;t=CmQUOV9F3jc." alt="全世界最好的叶先生">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">全世界最好的叶先生</a></h3>
                        <p class="tryread">虞美人						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>365

                                                    </span>
                        <p class="introduce">爱过，伤过，纠缠过，白悠悠决定放弃了。给心爱的人自由，也还她一个自由！可为什么她放弃了，他却开始百般纠缠……“虐妻一时爽，追妻火葬场”，霸道总裁叶先生，化身成为宠妻狂魔，转眼便是全世界最好的叶先生……</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/e4e33e00/group61/M00/3D/75/CmQUOF9F4FaEFMAwAAAAAKe3XR0317567864.jpg?v=PL8bG60O&amp;t=CmQUOF9F4FY." alt="他的小哑妻">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">他的小哑妻</a></h3>
                        <p class="tryread">曲木子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>199

                                                    </span>
                        <p class="introduce">父亲被杀、母亲失踪，她毫不设防地上了游艇，却被“深爱”自己的名导未婚夫按进海里溺水而亡！著名女影星的死讯火速登上各大热搜……
                            重生归来，她成了又疯又哑的苏家二小姐，是整个阳城的笑话所在。还莫名扣上了一纸婚约，被送进那位阎王爷的婚房。
                            “秦城阳你放手！你不是不想娶我吗？”
                            “哦，现在想了。”
                            之后日日夜夜的抵死交缠，复仇之路突然多了一个甩都甩不掉的霸道帮手，她才明白这场爱欲，是彻底逃不掉了。
                            他按着她入怀：“老婆，有什么仇，我帮你报。”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/81dd01be/group61/M00/35/63/CmQUOV2dhwaEWK7YAAAAAB9r160784958460.jpg?v=0QcalPWn&amp;t=CmQUOV6Ixj0." alt="分手妻约">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">分手妻约</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>2015

                                                    </span>
                        <p class="introduce">做他情人三个月，他提出分手，她如弃妇一般砸了他的办公室。
                            他冷漠而无情，“你该知道，我不喜欢缠人的女人。”
                            再见面，她周旋于一班公子哥之间游刃有余，他看她的眼神仿佛是要掐死她一样！原来她人前假装伤心，人后照样风花雪月！
                            嗨，莫先生，不是说好的分手快乐？
                            谁知道，他却向她提出结婚，直接领证盖章！……
                            媒体传闻，莫家大少体弱多病，有算命师曾预言他会短命。女人眼中，莫家大少容颜俊美，堪称天下无双。整个家族，莫家大少与人交好与世无争。可就是这个最无害的人，将莫氏集团玩弄于鼓掌之中。
                            更甚至，亲手将她送进监狱！
                            法庭上她纵声大笑，这一刻，她没有亲人没有朋友没有爱人，一无所有！
                            她对着所有人宣布，“我有罪！”
                            爱上一个人，是所有开始的原罪！
                            【 板栗频道 强推好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/7c148829/group61/M00/18/28/CmQUOF87WRSECCj9AAAAAGv3sVc473928828.jpg?v=Kqz1Cp8c&amp;t=CmQUOF87WRQ." alt="他似月光太薄凉">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">他似月光太薄凉</a></h3>
                        <p class="tryread">淡浅淡狸						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>143

                                                    </span>
                        <p class="introduce">霍瓷爱溥云澜，爱的失去自我，换来的却是溥云澜无情的对待和迫害。一纸离婚协议，将两人支离破碎的婚姻彻底结束。
                            霍瓷问溥云澜：“你可曾爱过我，哪怕一点点？”
                            溥云澜：“从未！”
                            霍瓷知道，自己对溥云澜的爱，到此为止。
                            离婚后，霍瓷成为知名的设计师。再次和溥云澜重逢，已然不是当初那个追在溥云澜身后的女人，她挽着别人的手，对他巧笑嫣然。
                            溥云澜在那一刻才知道，有些爱，早已经深入骨髓，如同跗骨之蛆！</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/4c16af9d/group61/M00/35/5A/CmQUOF2dhI2EeMSrAAAAAEiUl7k457483460.jpg?v=pky8A1kh&amp;t=CmQUOF6Ixj0." alt="天嫁之合">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">天嫁之合</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>1194

                                                    </span>
                        <p class="introduce">所有人都知道，她暗恋崇拜他十年之久。他是唐氏家族的二少，豪门第一继承人，传说中神一般的天之骄子唐仁修……她苦苦单恋，最终惨败结局！
                            可在唐家二少眼里，却是另外一个版本——小娇妻好傻萌，小娇妻不上钩！小娇妻真难撩，小娇妻逃走了！好不容易逮住她，想尽办法才成功上位娶到她！唐二少抱着心上人一阵感慨，这是多么苦逼的南泥湾式的恋爱史啊……
                            某天，一位好心人八卦问，“你们是怎么认识的？”唐二少悲壮的说出经过，总结以下两句话：“在大学里，她偷偷追了我好几天。不过后来，我追了她好几年。”
                            【 板栗频道 高分好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/8821946b/group61/M00/5C/D6/CmQUOF9ysp-EdyXrAAAAAHGNXB8141002944.jpg?v=hu4r2TGi&amp;t=CmQUOF9ysp8." alt="一顾情深，念念似海">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">一顾情深，念念似海</a></h3>
                        <p class="tryread">四喜丸子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>231

                                                    </span>
                        <p class="introduce">他霸道强势，如同帝王般不可一世，却唯独视她如命。
                            人尽皆知，顾先生是个高傲冷峻的主儿。某私家别墅里，顾洺衍撇撇嘴，一把抢过勺子：“我也要喂。”
                            人尽皆知，顾先生是个视女人如粪土的主儿。某生日宴会上，顾洺衍左顾右盼，劈手夺过寿星的话筒：“顾太太，你先生在找你。”
                            人尽皆知，顾先生是个心狠手辣的主儿。某新闻发布会上，顾洺衍眉目温柔，揽着顾太太的腰：“你们说话的声音小点，我太太有点困。”
                            他是魔鬼撒旦，也是她的守护神。
                            他是科技天才，也是她的顾三岁。
                            一朝抱上床，十年不松手。</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/aaf0562f/group61/M00/11/C0/CmQUOF8ztDSEbwieAAAAADu8naQ742392527.jpg?v=MTQr83ns&amp;t=CmQUOF8ztDQ." alt="陆先生的宠妻日常">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">陆先生的宠妻日常</a></h3>
                        <p class="tryread">杜灵兮						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>174

                                                    </span>
                        <p class="introduce">一夜春风，陆良辰娶了许岚，许岚也见色起意，一头扎进了婚姻的围城里。婚后各路情敌上门，还要对付各种太太团。许岚头疼，“这个陆太太你们爱谁当谁当，我不当了！”谁知，一年后，陆良辰堵在她身前，“老婆，该回家了。”许岚：“……？？”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/d9197b53/group61/M00/C2/36/CmQUOVzUHOqETdKHAAAAAGR8IG4538755830.jpg?v=CZw_6H7H&amp;t=CmQUOV6IySE." alt="宫阙：海青拿天鹅唯美甜宠系列">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">宫阙：海青拿天鹅唯美甜宠系列</a></h3>
                        <p class="tryread">海青拿天鹅						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>625

                                                    </span>
                        <p class="introduce">古言大神海青拿天鹅5部唯美甜宠经典代表作，分别讲述了5个不同时代的爱情故事。“白芍”：上古时期天庭第一风流神君PK史上最萌天狗。“殷商玄鸟纪”：完美再现浓郁殷商古朴之风，讲述一段“诗经”里才有的热烈而又质朴的爱恋。“双阙”：西周时期杞国国君之女在两位同样优秀性格却完全不同的男人之间艰难抉择。“嫤语书年”：乱世枭雄PK心机贵女，是你知道的三国，却有你不知道的浪漫。“春莺啭”：世间男子，莫如东洲明珠西京玉，一卷读罢，难舍魏晋翩翩君子风。
                            【 板栗自出版 品质好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/6392dc14/group61/M00/3D/C4/CmQUOV9F3jeEB776AAAAABLv6Aw510260432.jpg?v=ffVFTZyx&amp;t=CmQUOV9F3jc." alt="全世界最好的叶先生">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">全世界最好的叶先生</a></h3>
                        <p class="tryread">虞美人						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328743" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>365

                                                    </span>
                        <p class="introduce">爱过，伤过，纠缠过，白悠悠决定放弃了。给心爱的人自由，也还她一个自由！可为什么她放弃了，他却开始百般纠缠……“虐妻一时爽，追妻火葬场”，霸道总裁叶先生，化身成为宠妻狂魔，转眼便是全世界最好的叶先生……</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/e4e33e00/group61/M00/3D/75/CmQUOF9F4FaEFMAwAAAAAKe3XR0317567864.jpg?v=PL8bG60O&amp;t=CmQUOF9F4FY." alt="他的小哑妻">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">他的小哑妻</a></h3>
                        <p class="tryread">曲木子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>199

                                                    </span>
                        <p class="introduce">父亲被杀、母亲失踪，她毫不设防地上了游艇，却被“深爱”自己的名导未婚夫按进海里溺水而亡！著名女影星的死讯火速登上各大热搜……
                            重生归来，她成了又疯又哑的苏家二小姐，是整个阳城的笑话所在。还莫名扣上了一纸婚约，被送进那位阎王爷的婚房。
                            “秦城阳你放手！你不是不想娶我吗？”
                            “哦，现在想了。”
                            之后日日夜夜的抵死交缠，复仇之路突然多了一个甩都甩不掉的霸道帮手，她才明白这场爱欲，是彻底逃不掉了。
                            他按着她入怀：“老婆，有什么仇，我帮你报。”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/81dd01be/group61/M00/35/63/CmQUOV2dhwaEWK7YAAAAAB9r160784958460.jpg?v=0QcalPWn&amp;t=CmQUOV6Ixj0." alt="分手妻约">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">分手妻约</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11883000" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>2015

                                                    </span>
                        <p class="introduce">做他情人三个月，他提出分手，她如弃妇一般砸了他的办公室。
                            他冷漠而无情，“你该知道，我不喜欢缠人的女人。”
                            再见面，她周旋于一班公子哥之间游刃有余，他看她的眼神仿佛是要掐死她一样！原来她人前假装伤心，人后照样风花雪月！
                            嗨，莫先生，不是说好的分手快乐？
                            谁知道，他却向她提出结婚，直接领证盖章！……
                            媒体传闻，莫家大少体弱多病，有算命师曾预言他会短命。女人眼中，莫家大少容颜俊美，堪称天下无双。整个家族，莫家大少与人交好与世无争。可就是这个最无害的人，将莫氏集团玩弄于鼓掌之中。
                            更甚至，亲手将她送进监狱！
                            法庭上她纵声大笑，这一刻，她没有亲人没有朋友没有爱人，一无所有！
                            她对着所有人宣布，“我有罪！”
                            爱上一个人，是所有开始的原罪！
                            【 板栗频道 强推好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/7c148829/group61/M00/18/28/CmQUOF87WRSECCj9AAAAAGv3sVc473928828.jpg?v=Kqz1Cp8c&amp;t=CmQUOF87WRQ." alt="他似月光太薄凉">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">他似月光太薄凉</a></h3>
                        <p class="tryread">淡浅淡狸						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12324278" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>143

                                                    </span>
                        <p class="introduce">霍瓷爱溥云澜，爱的失去自我，换来的却是溥云澜无情的对待和迫害。一纸离婚协议，将两人支离破碎的婚姻彻底结束。
                            霍瓷问溥云澜：“你可曾爱过我，哪怕一点点？”
                            溥云澜：“从未！”
                            霍瓷知道，自己对溥云澜的爱，到此为止。
                            离婚后，霍瓷成为知名的设计师。再次和溥云澜重逢，已然不是当初那个追在溥云澜身后的女人，她挽着别人的手，对他巧笑嫣然。
                            溥云澜在那一刻才知道，有些爱，早已经深入骨髓，如同跗骨之蛆！</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/4c16af9d/group61/M00/35/5A/CmQUOF2dhI2EeMSrAAAAAEiUl7k457483460.jpg?v=pky8A1kh&amp;t=CmQUOF6Ixj0." alt="天嫁之合">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">天嫁之合</a></h3>
                        <p class="tryread">禾维						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11882999" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>1194

                                                    </span>
                        <p class="introduce">所有人都知道，她暗恋崇拜他十年之久。他是唐氏家族的二少，豪门第一继承人，传说中神一般的天之骄子唐仁修……她苦苦单恋，最终惨败结局！
                            可在唐家二少眼里，却是另外一个版本——小娇妻好傻萌，小娇妻不上钩！小娇妻真难撩，小娇妻逃走了！好不容易逮住她，想尽办法才成功上位娶到她！唐二少抱着心上人一阵感慨，这是多么苦逼的南泥湾式的恋爱史啊……
                            某天，一位好心人八卦问，“你们是怎么认识的？”唐二少悲壮的说出经过，总结以下两句话：“在大学里，她偷偷追了我好几天。不过后来，我追了她好几年。”
                            【 板栗频道 高分好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/8821946b/group61/M00/5C/D6/CmQUOF9ysp-EdyXrAAAAAHGNXB8141002944.jpg?v=hu4r2TGi&amp;t=CmQUOF9ysp8." alt="一顾情深，念念似海">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">一顾情深，念念似海</a></h3>
                        <p class="tryread">四喜丸子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328744" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>231

                                                    </span>
                        <p class="introduce">他霸道强势，如同帝王般不可一世，却唯独视她如命。
                            人尽皆知，顾先生是个高傲冷峻的主儿。某私家别墅里，顾洺衍撇撇嘴，一把抢过勺子：“我也要喂。”
                            人尽皆知，顾先生是个视女人如粪土的主儿。某生日宴会上，顾洺衍左顾右盼，劈手夺过寿星的话筒：“顾太太，你先生在找你。”
                            人尽皆知，顾先生是个心狠手辣的主儿。某新闻发布会上，顾洺衍眉目温柔，揽着顾太太的腰：“你们说话的声音小点，我太太有点困。”
                            他是魔鬼撒旦，也是她的守护神。
                            他是科技天才，也是她的顾三岁。
                            一朝抱上床，十年不松手。</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/aaf0562f/group61/M00/11/C0/CmQUOF8ztDSEbwieAAAAADu8naQ742392527.jpg?v=MTQr83ns&amp;t=CmQUOF8ztDQ." alt="陆先生的宠妻日常">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">陆先生的宠妻日常</a></h3>
                        <p class="tryread">杜灵兮						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12328747" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>174

                                                    </span>
                        <p class="introduce">一夜春风，陆良辰娶了许岚，许岚也见色起意，一头扎进了婚姻的围城里。婚后各路情敌上门，还要对付各种太太团。许岚头疼，“这个陆太太你们爱谁当谁当，我不当了！”谁知，一年后，陆良辰堵在她身前，“老婆，该回家了。”许岚：“……？？”</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/d9197b53/group61/M00/C2/36/CmQUOVzUHOqETdKHAAAAAGR8IG4538755830.jpg?v=CZw_6H7H&amp;t=CmQUOV6IySE." alt="宫阙：海青拿天鹅唯美甜宠系列">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">宫阙：海青拿天鹅唯美甜宠系列</a></h3>
                        <p class="tryread">海青拿天鹅						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=11809124" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>625

                                                    </span>
                        <p class="introduce">古言大神海青拿天鹅5部唯美甜宠经典代表作，分别讲述了5个不同时代的爱情故事。“白芍”：上古时期天庭第一风流神君PK史上最萌天狗。“殷商玄鸟纪”：完美再现浓郁殷商古朴之风，讲述一段“诗经”里才有的热烈而又质朴的爱恋。“双阙”：西周时期杞国国君之女在两位同样优秀性格却完全不同的男人之间艰难抉择。“嫤语书年”：乱世枭雄PK心机贵女，是你知道的三国，却有你不知道的浪漫。“春莺啭”：世间男子，莫如东洲明珠西京玉，一卷读罢，难舍魏晋翩翩君子风。
                            【 板栗自出版 品质好文 】</p>
                    </div>
                </li>
                <li>
                    <a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_105,h_140,q_100/e4e33e00/group61/M00/3D/75/CmQUOF9F4FaEFMAwAAAAAKe3XR0317567864.jpg?v=PL8bG60O&amp;t=CmQUOF9F4FY." alt="他的小哑妻">
                    </a>
                    <div class="bookMation">
                        <h3><a href="//www.ireader.com.cn/index.php?ca=bookdetail.index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">他的小哑妻</a></h3>
                        <p class="tryread">曲木子						<a href="//www.ireader.com.cn/index.php?ca=Chapter.Index&amp;pca=booksort.index&amp;bid=12331913" target="_blank">试读</a>                        </p>
                        <span>
                                                            <s></s>199

                                                    </span>
                        <p class="introduce">父亲被杀、母亲失踪，她毫不设防地上了游艇，却被“深爱”自己的名导未婚夫按进海里溺水而亡！著名女影星的死讯火速登上各大热搜……
                            重生归来，她成了又疯又哑的苏家二小姐，是整个阳城的笑话所在。还莫名扣上了一纸婚约，被送进那位阎王爷的婚房。
                            “秦城阳你放手！你不是不想娶我吗？”
                            “哦，现在想了。”
                            之后日日夜夜的抵死交缠，复仇之路突然多了一个甩都甩不掉的霸道帮手，她才明白这场爱欲，是彻底逃不掉了。
                            他按着她入怀：“老婆，有什么仇，我帮你报。”</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="changepage">
                <span>
                    <a class="up noClick"><s></s><i class="iii">上一页</i></a><a class="cur">1</a><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=0&amp;page=2">2</a><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=0&amp;page=3">3</a><a class="noBg">...</a><a href="https://www.ireader.com.cn/index.php?ca=booksort.index&amp;pca=booksort.index&amp;pid=92&amp;cid=93&amp;order=download&amp;status=0&amp;page=2" class="down"><i class="iii">下一页</i><s></s></a>                </span>
        </div>
    </div>
    <div class="v1_foot">
        <div class="aboutcompany">底部栏</div>
    </div>
</div>

</body>
</html>