<?php
use PHPMailer\PHPMailer\PHPMailer;
try {
    header("content-type:text/html;charset=utf-8"); //设置编码
    $user_mail = $_POST['email'];
    $_SESSION['emain'] = $user_mail;
    if(!check_mail($user_mail)){
        echo json_encode(0);
        return ;
    }
    //授权码
    $key = "hxtxcnilwcygdgjc";
    // 引入PHPMailer的核心文件
    //require_once("../tools/PHPMailer-master/src/PHPMailer.php");
    //require_once("../tools/PHPMailer-master/src/SMTP.php");
    require_once '../tools/PHPMailer-master/src/PHPMailer.php';
    require_once '../tools/PHPMailer-master/src/SMTP.php';
    // 实例化PHPMailer核心类
    $mail = new PHPMailer();
    // 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
//    $mail->SMTPDebug = 1;
    // 使用smtp鉴权方式发送邮件
    $mail->isSMTP();
    // smtp需要鉴权 这个必须是true
    $mail->SMTPAuth = true;
    // 链接qq域名邮箱的服务器地址
    $mail->Host = 'smtp.qq.com';
    // 设置使用ssl加密方式登录鉴权
    $mail->SMTPSecure = 'ssl';
    // 设置ssl连接smtp服务器的远程服务器端口号
    $mail->Port = 465;
    // 设置发送的邮件的编码
    $mail->CharSet = 'UTF-8';
    // 设置发件人昵称 显示在收件人邮件的发件人邮箱地址前的发件人姓名
    $mail->FromName = '2944163240@qq.com';
    // smtp登录的账号 QQ邮箱即可
    $mail->Username = '2944163240@qq.com';
    // smtp登录的密码 使用生成的授权码
    $mail->Password = $key;
    // 设置发件人邮箱地址 同登录账号
    $mail->From = '2944163240@qq.com';
    // 邮件正文是否为html编码 注意此处是一个方法
    $mail->isHTML(true);
    // 设置收件人邮箱地址
//    return "asdfasdf";
//    echo json_encode($user_mail);
    $mail->addAddress($user_mail);
    // 添加多个收件人 则多次调用方法即可
    //$mail->addAddress('266*******@qq.com');
    // 添加该邮件的主题
    $mail->Subject = '测试邮件';
    // 添加邮件正文
    $mail->Body = '您好，您的验证码为:' . getcode("cade");
    // 为该邮件添加附件
    //$mail->addAttachment('./example.pdf');
    // 发送邮件 返回状态
    $status = $mail->send();
    //生成随机数验证码
    echo json_encode(1);
}
catch (Exception $e){
//    return 0;
    echo json_encode(0);
}
function getcode($tel){
    $code=rand(10000,99999);
    session_start();
    $_SESSION["tel"]=$code;
    return $code;
}
function check_mail($user_mail){
    $result = trim($user_mail);
    if(filter_var($result,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

?>