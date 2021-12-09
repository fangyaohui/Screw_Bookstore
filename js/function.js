function sendmailcaptcha(){
    var mail = document.getElementById("email").value;
    if(mail.length === 0){
        alert("请输入邮箱");
        // window.location = "../view/Find_password.html";
        return ;
    }
    $.ajax({
        type: 'POST',
        url: '../php/send_mail_captcha.php',
        data: {email: mail},
        success: function(msg){
            // msg: php返回内容
            /* alert(修改成功); */
            // msg = eval("("+msg+")");

            // document.write(msg);
            // alert(msg);
            if(msg==1){
                alert("验证码发送成功,请在一分钟内输入验证码");
                // window.location = "../view/Find_password.html";
            }

            else{
                alert("验证码发送失败，请检查邮箱是否正确");
                // window.location = "../view/Find_password.html";
            }

            // window.location = window.location;
        },
        error:function(msg){// 提交失败
            alert("验证码发送失败");
            // window.location = "../view/Find_password.html";
        }
    });
}
function find_password_submit(){
    window.location = "../php/Find_password.php";
}
function purchase(){

}