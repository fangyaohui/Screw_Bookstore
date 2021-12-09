<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/shopping_cart.css" rel="stylesheet" type="text/css">
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
        session_start();
        $user = unserialize($_SESSION['user']);
        if(empty($user)){
            echo alert("您还未登录，点击确定前往登录","../view/login.html");
            return ;
        }
    ?>

    <div class="car">
        <div class="good">
            <table><tr><td width=30%>图书名称</td><td width=20%>作者</td><td width=20%>价格</td><td width=30%>操作</td></tr></table>
        </div>
        <div class="goods">
            <table>
                <?php
                    require_once 'common/library/Db.php';
                    require_once 'del_shoppingbook.php';
                    $u_id = $user->getUid();
                    $db = Db::getInstance();
                    $sql = "select * from shopping where u_id={$u_id}";
                    $res = $db->read_all($sql);
                    foreach ($res as $temp ){
                        $sql = "select * from books where id={$temp['b_id']}";
                        $data = $db->read_one($sql);
                        $integral = $data['integral'];
                        $bookname = $data['bookname'];
                        $author = $data['author'];
                        $bookid = $data['id'];
                        echo "<tr><td width=30%><a href='book.php?bookid={$bookid}'>{$bookname}</a></td><td width=20%>{$author}</td><td width=20%>{$integral}</td>";
                        echo "<td width=30%><a href='purchase.php?bookid={$bookid}'><button class='btn1' onclick=''>购买</button></a>";
                        echo "&nbsp;<a href='del_shoppingbook.php?bookid={$bookid}'><button class='btn1' onclick=''>删除</button></a></td></tr>";
                    }

                ?>
            </table>
        </div>
        <div class="goods2">
            <table>
                <tr>
                    <td width=560></td>
                    <td width=20%></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="goods1">
            <table>
                <tr>
                    <td width=50%>
                        <button class="btn2" onclick="fang()">全部购买</button>
                    </td>
                    <td>
                        <button class="btn3" onclick="">全部清空</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>