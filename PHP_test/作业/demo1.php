<?php
$link = mysqli_connect('localhost','root','111111','aaa');
mysqli_set_charset($link,'utf8');
$id = $_POST['id'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$department = $_POST['department'];
//echo $age;
//return ;
if(empty($id) || empty($name) || empty($sex)){
    echo alert("标红星的不能为空",'demo1.html');
    return ;
}
$sql = "select * from `student` where `id`={$id}";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);

if(empty($row)){
    if(empty($age)){
        $sql = "insert into student values('{$id}','{$name}','{$sex}',null,'{$department}');";
    }
    else{
        $sql = "insert into student values('{$id}','{$name}','{$sex}',{$age},'{$department}');";
    }
    if(mysqli_query($link,$sql)){
        echo alert("添加成功，即将跳转添加页面",'demo1.html');
        return ;
    }else{
        echo alert("添加失败",'demo1.html');
        return ;
    }
}else{
    echo alert("该学生已经注册，不能添加",'demo1.html');
    return ;
}
function alert($name,$url){
//    $res = "<script language=\"JavaScript\">alert(\"你好\");</script>";
    $res = "<script language=\"JavaScript\">;alert(\"".$name."\");location.href=\"".$url."\";</script>";
    return $res;
}