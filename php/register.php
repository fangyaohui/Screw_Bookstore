<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城注册页面</title>
    <link href="../css/register.css" rel="stylesheet" type="text/css">
    <script src="//cdn.bootcss.com/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script>
        function sendmailcaptcha(){
            var mail = document.getElementById("email").value;
            if(mail.length == 0){
                alert("请输入邮箱");
                return ;
            }
            $.ajax({
                type: 'POST',
                url: 'send_mail_captcha.php',
                data: {email: mail},
                success: function(msg){
                    // msg: php返回内容
                    /* alert(修改成功); */
                    // msg = eval("("+msg+")");
                    
                    // document.write(msg);
                    // alert(msg);
                    if(msg==1)
                        alert("验证码发送成功,请在一分钟内输入验证码");
                    else
                        alert("验证码发送失败，请检查邮箱是否正确");
                    // window.location = window.location;
                },
                error:function(msg){// 提交失败
                    alert("验证码发送失败");
                }
            });
        }
    </script>
</head>
<body>
<div class="wrap">
    <div class="container">
        <h1 style="color: white; margin: 0; text-align: center">用户注册</h1>
        <form action="register_function.php" method="post">
            <label><input type="text" name="username" placeholder="用户名(6到15位数字与英文字母)" /></label>
            <label><input type="text" name="email"  placeholder="邮箱" id="email"/></label>
            <label><input type="password" name="password" placeholder="密码(6到15位数字与英文字母)" /></label>
            <label><input type="password" name="repassword" placeholder="重复密码" /></label>
            <input type="button" value="发送验证码" onclick="sendmailcaptcha()">
            <label><input type="text" name="captcha" placeholder="验证码"></label>
            <input type="submit" value="注册"/>
            <p class="change_link" style="text-align: center">
                <span class="text">已经注册 ?</span>
                <a href="../view/login.html" class="to_login"> 点击去登录 </a>
            </p>
        </form>
    </div>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</body>
</html>
<!--http://localhost:51368/books_web/php/register.php?_ijt=ce5lqu6bqvmqomo0us3jgff9fp&_ij_reload=RELOAD_ON_CHANGE-->