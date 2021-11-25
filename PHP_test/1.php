<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script>
    function sendmailcaptcha(){
        var mail = document.getElementById("email").value;
        alert("asdfas");
        $.ajax({
            type: 'POST',
            url: 'http://localhost:51368/books_web/php/fang.php',
            data: {val: mail}
            success: function(msg){
                // msg: php返回内容
                /* alert(修改成功); */
                if(msg)
                    alert("验证码发送成功");
                else
                    alert("验证码发送失败");
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
    <input type="text" name="email"  placeholder="邮箱" id="email"/>
    <input type="button" value="发送验证码" onclick="sendmailcaptcha()">
</body>
</html>