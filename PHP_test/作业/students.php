<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生总表</title>
    <style>
        h2{
            align-content: center;
            text-align: center;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<h2><a href="demo1.html">添加记录</a></h2>
<br><br>
<table border="1" width="95%" align="center">
    <thead>
    <tr bgcolor="#e0e0e0">
        <th>学号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>专业</th>
        <th>删除</th>
        <th>编辑</th>
    </tr>
    </thead>
    <?php
        $link = mysqli_connect('localhost','root','111111','aaa');
        mysqli_set_charset($link,'utf8');
        $sql = "select * from `student`";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_all($result);
        foreach ($row as $i){
            echo '<tr>';
            foreach ($i as $j){
                echo "<td>$j</td>";
            }
            echo '<td><a href="#">删除</a></td><td><a href="#">编辑</a></td>';
            echo '</tr>';
        }
    ?>
</table>
</body>
</html>