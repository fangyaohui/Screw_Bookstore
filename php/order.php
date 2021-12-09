<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/order.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>

    <?php
        require_once 'common/top.php';
    ?>
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
                        <button class="btn3">全部清空</button>
                    </td>
                </tr>
            </table>
        </div>
        
    </div>
</div>

</body>
</html>