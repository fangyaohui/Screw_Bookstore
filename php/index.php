<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
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
                        <li class="current"><a href=""><b>首页</b></a></li>
                        <li><a href="classification.php"><b>分类</b></a></li>
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
    <div class="recom">
        <div class="recomWrap">
            <div class="title" id="recommend_book_current_book" style="display: block;">
                <h2>
                    <a href="#" target="_blank" title="零基础学画漫画4：素描技法练习本">
                        <i>螺钉书城今日推荐</i>
                    </a>
                </h2>
                <p>下列图书螺钉书城免费为用户提供阅读</p>
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
                            echo "<li class='little'>
                                            <a href='#' target='_blank' title='中国互联网商业英雄列传'>
                                                <img src=\"$img\" title='' alt='' class='lazy' style='display: inline-block; height: 156px; width: 117px; margin-top: 5px; overflow: hidden;'>
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
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>
                </p>
            </div>
            <div class="show">
                <div class="showLeft">
                    <h3><a href="" title="萌医甜妻" target="_blank">萌医甜妻</a></h3>
                    <p class="author">作者: 酒小七</p>
                    <p class="introduce">影视剧《萌医甜妻》原著小说！内含独家番外！网络连载名《陛下请淡定》。</p>
                    <span>
                    <a href="#" target="_blank" title="萌医甜妻">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_156,h_208,q_100/fc0889ac/group61/M00/81/76/CmQUOV33KjGEXQPSAAAAAFH3ebM394816041.jpg?v=VES-HzNT&amp;t=CmQUOV6Ixqk." title="萌医甜妻" alt="萌医甜妻" class="bookCover lazy">
                    </a>
                        <!--                    <img src="//pweb.d.ireader.com/static/images/index/shadow.gif" alt="萌医甜妻" class="shadow">-->
                </span>
                </div>
                <div class="hamid">
                    <ul class="showMid">
                        <li>
                            <a href="" target="_blank" title="宅中歌">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/c0e01cab/group61/M00/21/22/CmQUOV1wn9GEOlMmAAAAAJKg8kc470575815.jpg?v=18zG1qo-&amp;t=CmQUOV6Ixg4." title="宅中歌" alt="宅中歌" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="宅中歌" target="_blank">宅中歌</a>
                            </p>
                            <p>白鹭成双</p>
                        </li>
                        <li>
                            <a href="" target="_blank" title="悍女三嫁">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/b4d40c93/group61/M00/15/A2/CmQUOV1eXVOEZgKZAAAAACMUKlk298154081.jpg?v=lXgf2ndV&amp;t=CmQUOV1eXVM." title="悍女三嫁" alt="悍女三嫁" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="悍女三嫁" target="_blank">悍女三嫁</a>
                            </p>
                            <p>秋李子</p>
                        </li>
                        <li class="tb">
                            <a href="/" target="_blank" title="我亲爱的小竹马">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/5e4e9e1c/group61/M00/62/F6/CmQUOV3qVe2EffyDAAAAAI3D7MA039740297.jpg?v=tENm0WUI&amp;t=CmQUOV5V20g." title="我亲爱的小竹马" alt="我亲爱的小竹马" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="我亲爱的小竹马" target="_blank">我亲爱的小竹马</a>
                            </p>
                            <p>酒小七</p>
                        </li>
                        <li class="tb">
                            <a href="" target="_blank" title="奢侈">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/37008d81/group61/M00/19/82/CmQUOV1l6xKEQhczAAAAAMJWPo0436163770.jpg?v=Lj6LYvER&amp;t=CmQUOV6Ixgw." title="奢侈" alt="奢侈" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="奢侈" target="_blank">奢侈</a>
                            </p>
                            <p>折火一夏</p>
                        </li>
                        <li class="tb">
                            <a href="/" target="_blank" title="我亲爱的小竹马">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/5e4e9e1c/group61/M00/62/F6/CmQUOV3qVe2EffyDAAAAAI3D7MA039740297.jpg?v=tENm0WUI&amp;t=CmQUOV5V20g." title="我亲爱的小竹马" alt="我亲爱的小竹马" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="我亲爱的小竹马" target="_blank">我亲爱的小竹马</a>
                            </p>
                            <p>酒小七</p>
                        </li>
                        <li class="tb">
                            <a href="" target="_blank" title="奢侈">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/37008d81/group61/M00/19/82/CmQUOV1l6xKEQhczAAAAAMJWPo0436163770.jpg?v=Lj6LYvER&amp;t=CmQUOV6Ixgw." title="奢侈" alt="奢侈" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="奢侈" target="_blank">奢侈</a>
                            </p>
                            <p>折火一夏</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sel_cir">
            <div class="conBigTitle"><h2>热门书圈</h2></div>
            <div class="cirShow">
                <ul class="cirBig">
                    <li>
                    <span class="cirHead">
                        <a href="">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/ce16384b/group6/M00/EF/08/CmQUNlswWuGEI-P_AAAAAGcokYo470353353.jpg?v=zCb05qFg&amp;t=CmQUNlswWuE." title="古代言情" alt="古代言情" class="lazy">
                        </a>
                        <s class="fire"></s>
                    </span>
                        <h3><a href="">古代言情</a></h3>
                        <p class="little">相望古言，相聚古言，古言–我们的家园</p>
                        <span class="attent">
                        <s class="fans"></s>
                        <i>34w+</i>
                        <s class="cards"></s>
                        <i>36613</i>
                    </span>
                    </li>
                    <li class="middle">
                    <span class="cirHead">
                        <a href="" title="现代言情" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/b1fb4c32/group6/M00/EF/08/CmQUNlswW06Ec5WmAAAAACImj3c976890971.jpg?v=pEoO4QEx&amp;t=CmQUNlswW04." title="现代言情" alt="现代言情" class="lazy">
                        </a>
                        <s class="fire"></s>
                    </span>
                        <h3><a href="" title="现代言情" target="_blank">现代言情</a></h3>
                        <p class="little">Hey, 你的少女心♥掉在这里了...</p>
                        <span class="attent">
                        <s class="fans"></s>
                        <i>20w+</i>
                        <s class="cards"></s>
                        <i>16948</i>
                    </span>
                    </li>
                    <li>
                    <span class="cirHead">
                        <a href="" title="青春校园" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/bfadaf77/group6/M00/EF/11/CmQUN1swh_mEfkV0AAAAANKnaaU020118518.jpg?v=Q1NQqWqL&amp;t=CmQUN1swh_k." title="青春校园" alt="青春校园" class="lazy">
                        </a>
                        <s class="fire"></s>
                    </span>
                        <h3><a href="" title="青春校园" target="_blank">青春校园</a></h3>
                        <p class="little">青嶂青溪直复斜，春雪空濛帘外寒；校量功力相千万，园林月白秋霖散。</p>
                        <span class="attent">
                        <s class="fans"></s>
                        <i>14w+</i>
                        <s class="cards"></s>
                        <i>18446</i>
                    </span>
                    </li>
                </ul>
                <div class="zwtit"><img src="//pweb.d.ireader.com/static/images/common/zwtit.png" alt=""></div>
                <ul class="cirLittle zwqz">
                    <li>
                    <span class="litHead">
                        <a href="" title="情感" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/71fee514/group6/M00/1C/74/CmRablswwt2EKu2UAAAAAOQZ58o026610528.jpg?v=w64zJDdg&amp;t=CmRablswwt0." alt="情感">
                        </a>
                    </span>
                        <div class="bookCon">
                            <h3><a href="" title="情感" target="_blank">情感</a></h3>
                            <p>9676部作品</p>
                        </div>
                    </li>
                    <li>
                    <span class="litHead">
                        <a href="" title="科幻" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/2ab99546/group6/M00/EF/16/CmQUNlswbOaEQwe_AAAAAIWAkFQ186283339.jpg?v=8N8Z8LMS&amp;t=CmQUNlswbOY." alt="科幻">
                        </a>
                    </span>
                        <div class="bookCon">
                            <h3><a href="" title="科幻" target="_blank">科幻</a></h3>
                            <p>1003部作品</p>
                        </div>
                    </li>
                    <li>
                    <span class="litHead">
                        <a href="" title="悬疑推理" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/467cba7c/group6/M00/1C/2F/CmRae1swXU6EKGW2AAAAAJBPyUs060526757.jpg?v=j5BKgYCC&amp;t=CmRae1swXU4." alt="悬疑推理">
                        </a>
                    </span>
                        <div class="bookCon">
                            <h3><a href="" title="悬疑推理" target="_blank">悬疑推理</a></h3>
                            <p>736部作品</p>
                        </div>
                    </li>
                    <li>
                    <span class="litHead">
                        <a href="" title="武侠" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/8c743f75/group6/M00/1D/00/CmRaelszMT-EDFwHAAAAAKqS8cs181978067.jpg?v=48satnrL&amp;t=CmRaelszMT4." alt="武侠">
                        </a>
                    </span>
                        <div class="bookCon">
                            <h3><a href="" title="武侠" target="_blank">武侠</a></h3>
                            <p>1092部作品</p>
                        </div>
                    </li>
                    <li>
                    <span class="litHead">
                        <a href="" title="文学" target="_blank">
                            <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_300,h_400/4c61e2a0/group6/M00/EF/09/CmQUNlswW6iEAzRwAAAAANMnZTE319229773.jpg?v=ewnsQJEf&amp;t=CmQUNlswW6g." alt="文学">
                        </a>
                    </span>
                        <div class="bookCon">
                            <h3><a href="" title="文学" target="_blank">文学</a></h3>
                            <p>4456部作品</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="freebook">
            <div class="conBigTitle">
                <h2>免费图书</h2>
                <p>
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>
                </p>
            </div>
            <div class="show">
                <div class="showLeft">
                    <h3><a href="" title="萌医甜妻" target="_blank">萌医甜妻</a></h3>
                    <p class="author">作者: 酒小七</p>
                    <p class="introduce">影视剧《萌医甜妻》原著小说！内含独家番外！网络连载名《陛下请淡定》。</p>
                    <span>
                    <a href="#" target="_blank" title="萌医甜妻">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_156,h_208,q_100/fc0889ac/group61/M00/81/76/CmQUOV33KjGEXQPSAAAAAFH3ebM394816041.jpg?v=VES-HzNT&amp;t=CmQUOV6Ixqk." title="萌医甜妻" alt="萌医甜妻" class="bookCover lazy">
                    </a>
                        <!--                    <img src="//pweb.d.ireader.com/static/images/index/shadow.gif" alt="萌医甜妻" class="shadow">-->
                </span>
                </div>
                <div class="hamid">
                    <ul class="showMid">
                        <li>
                            <a href="" target="_blank" title="宅中歌">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/c0e01cab/group61/M00/21/22/CmQUOV1wn9GEOlMmAAAAAJKg8kc470575815.jpg?v=18zG1qo-&amp;t=CmQUOV6Ixg4." title="宅中歌" alt="宅中歌" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="宅中歌" target="_blank">宅中歌</a>
                            </p>
                            <p>白鹭成双</p>
                        </li>
                        <li>
                            <a href="" target="_blank" title="悍女三嫁">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/b4d40c93/group61/M00/15/A2/CmQUOV1eXVOEZgKZAAAAACMUKlk298154081.jpg?v=lXgf2ndV&amp;t=CmQUOV1eXVM." title="悍女三嫁" alt="悍女三嫁" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="悍女三嫁" target="_blank">悍女三嫁</a>
                            </p>
                            <p>秋李子</p>
                        </li>
                        <li class="tb">
                            <a href="/" target="_blank" title="我亲爱的小竹马">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/5e4e9e1c/group61/M00/62/F6/CmQUOV3qVe2EffyDAAAAAI3D7MA039740297.jpg?v=tENm0WUI&amp;t=CmQUOV5V20g." title="我亲爱的小竹马" alt="我亲爱的小竹马" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="我亲爱的小竹马" target="_blank">我亲爱的小竹马</a>
                            </p>
                            <p>酒小七</p>
                        </li>
                        <li class="tb">
                            <a href="" target="_blank" title="奢侈">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/37008d81/group61/M00/19/82/CmQUOV1l6xKEQhczAAAAAMJWPo0436163770.jpg?v=Lj6LYvER&amp;t=CmQUOV6Ixgw." title="奢侈" alt="奢侈" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="奢侈" target="_blank">奢侈</a>
                            </p>
                            <p>折火一夏</p>
                        </li>
                        <li class="tb">
                            <a href="/" target="_blank" title="我亲爱的小竹马">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/5e4e9e1c/group61/M00/62/F6/CmQUOV3qVe2EffyDAAAAAI3D7MA039740297.jpg?v=tENm0WUI&amp;t=CmQUOV5V20g." title="我亲爱的小竹马" alt="我亲爱的小竹马" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="我亲爱的小竹马" target="_blank">我亲爱的小竹马</a>
                            </p>
                            <p>酒小七</p>
                        </li>
                        <li class="tb">
                            <a href="" target="_blank" title="奢侈">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/37008d81/group61/M00/19/82/CmQUOV1l6xKEQhczAAAAAMJWPo0436163770.jpg?v=Lj6LYvER&amp;t=CmQUOV6Ixgw." title="奢侈" alt="奢侈" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="奢侈" target="_blank">奢侈</a>
                            </p>
                            <p>折火一夏</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="newbook">
            <div class="conBigTitle">
                <h2>最新图书</h2>
                <p>
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>|
                    <a href="#">历史</a>
                </p>
            </div>
            <div class="show">
                <div class="showLeft">
                    <h3><a href="" title="萌医甜妻" target="_blank">萌医甜妻</a></h3>
                    <p class="author">作者: 酒小七</p>
                    <p class="introduce">影视剧《萌医甜妻》原著小说！内含独家番外！网络连载名《陛下请淡定》。</p>
                    <span>
                    <a href="#" target="_blank" title="萌医甜妻">
                        <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_156,h_208,q_100/fc0889ac/group61/M00/81/76/CmQUOV33KjGEXQPSAAAAAFH3ebM394816041.jpg?v=VES-HzNT&amp;t=CmQUOV6Ixqk." title="萌医甜妻" alt="萌医甜妻" class="bookCover lazy">
                    </a>
                        <!--                    <img src="//pweb.d.ireader.com/static/images/index/shadow.gif" alt="萌医甜妻" class="shadow">-->
                </span>
                </div>
                <div class="hamid">
                    <ul class="showMid">
                        <li>
                            <a href="" target="_blank" title="宅中歌">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/c0e01cab/group61/M00/21/22/CmQUOV1wn9GEOlMmAAAAAJKg8kc470575815.jpg?v=18zG1qo-&amp;t=CmQUOV6Ixg4." title="宅中歌" alt="宅中歌" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="宅中歌" target="_blank">宅中歌</a>
                            </p>
                            <p>白鹭成双</p>
                        </li>
                        <li>
                            <a href="" target="_blank" title="悍女三嫁">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/b4d40c93/group61/M00/15/A2/CmQUOV1eXVOEZgKZAAAAACMUKlk298154081.jpg?v=lXgf2ndV&amp;t=CmQUOV1eXVM." title="悍女三嫁" alt="悍女三嫁" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="悍女三嫁" target="_blank">悍女三嫁</a>
                            </p>
                            <p>秋李子</p>
                        </li>
                        <li class="tb">
                            <a href="/" target="_blank" title="我亲爱的小竹马">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/5e4e9e1c/group61/M00/62/F6/CmQUOV3qVe2EffyDAAAAAI3D7MA039740297.jpg?v=tENm0WUI&amp;t=CmQUOV5V20g." title="我亲爱的小竹马" alt="我亲爱的小竹马" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="我亲爱的小竹马" target="_blank">我亲爱的小竹马</a>
                            </p>
                            <p>酒小七</p>
                        </li>
                        <li class="tb">
                            <a href="" target="_blank" title="奢侈">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/37008d81/group61/M00/19/82/CmQUOV1l6xKEQhczAAAAAMJWPo0436163770.jpg?v=Lj6LYvER&amp;t=CmQUOV6Ixgw." title="奢侈" alt="奢侈" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="奢侈" target="_blank">奢侈</a>
                            </p>
                            <p>折火一夏</p>
                        </li>
                        <li class="tb">
                            <a href="/" target="_blank" title="我亲爱的小竹马">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/5e4e9e1c/group61/M00/62/F6/CmQUOV3qVe2EffyDAAAAAI3D7MA039740297.jpg?v=tENm0WUI&amp;t=CmQUOV5V20g." title="我亲爱的小竹马" alt="我亲爱的小竹马" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="我亲爱的小竹马" target="_blank">我亲爱的小竹马</a>
                            </p>
                            <p>酒小七</p>
                        </li>
                        <li class="tb">
                            <a href="" target="_blank" title="奢侈">
                                <img src="https://bookbk.img.zhangyue01.com/idc_1/m_1,w_117,h_156,q_100/37008d81/group61/M00/19/82/CmQUOV1l6xKEQhczAAAAAMJWPo0436163770.jpg?v=Lj6LYvER&amp;t=CmQUOV6Ixgw." title="奢侈" alt="奢侈" class="lazy">
                            </a>
                            <p class="bookName">
                                <a href="" title="奢侈" target="_blank">奢侈</a>
                            </p>
                            <p>折火一夏</p>
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