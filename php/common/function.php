<?php
function captcha_save($code)
{
    require './library/Db.php';
    for ($i = 0; $i < 4; $i++)
    {
        $vcode .= $code[$i];
    }
    $db = Db::getInstance();
    $time = time()+2134;
    session_start();
    $key = session_id();
    $sql = "REPLACE INTO `session` SET `s_id` = '{$key}',`expiry_time`='{$time}', `captcha`='{$vcode}'";
    $res = $db->write($sql);
}
function get_captcha(){
    require_once './common/library/Db.php';
    $db = Db::getInstance();
    session_start();
    $now = time();
    $key = session_id();
    $sql = "SELECT `captcha` FROM `session` WHERE `s_id` = '{$key}' AND `expiry_time` > '{$now}';";
    $res = $db->read_one($sql);
    return $res;
//print_r($res);
}
/**
 * 接收输入的函数
 * @param array $method 输入的数组（可用字符串get、post来表示）
 * @param string $name 从数组中取出的变量名
 * @param string $type 表示类型的字符串
 * @param mixed $default 变量不存在时使用的默认值
 * @return mixed 返回的结果
 */
function input($method, $name, $type = 's', $default = '')
{
    switch ($method) {
        case 'get': $method = $_GET; break;
        case 'post': $method = $_POST; break;
        case 'cookie': $method = $_COOKIE; break;
        case 'file': $method = $_FILES; break;
    }
    $data = isset($method[$name]) ? $method[$name] : $default;
    switch ($type) {
        case 's': return is_string($data) ? $data : $default;
        case 'd': return (int) $data;
        case 'b': return (bool) $data;
        case 'a': return is_array($data) ? $data : [];
        case 'f': return (float) $data;
        default: trigger_error('不存在的过滤类型“' . $type . '”');
    }
}
// 输入检查
function input_check($field, $data, &$msg = '')
{
    switch ($field) {
        case 'username':
            $msg = '2~10位中文、字母、数字、下划线。';
            return (bool)preg_match('/^[\w\x{4E00}-\x{9FA5}]{2,10}$/u', $data);
        case 'password':
            $msg = '6~12位字母、数字、下划线。';
            return (bool)preg_match('/^\w{6,12}$/', $data);
        case 'email':
            return (bool)preg_match('/^(\w+(\_|\-|\.)*)+@(\w+(\-)?)+(\.\w{2,})+$/', $data);
    }
}
/**
 * 密码加密
 * @param string $password 密码原文
 * @param string $salt 密钥
 * @return string 加密后的MD5值
 */
function password($password, $salt)
{
    return md5(md5($password) . $salt);
}
// 验证码进行验证
function captcha_check($code)
{
    $captcha = get_captcha()['captcha'];
    if(strtoupper($captcha) == strtoupper($code))
        return true;
    return false;
//    if (!empty($captcha)) {         // 清除验证码，防止重复验证
//        if()
//        return strtoupper($captcha) == strtoupper($code); // 不区分大小写
//    }
//    return false;
}
/**
 * 重定向并停止脚本
 * @param string $url 目标URL
 */
function redirect($url)
{
    header("Location: $url");
    exit;
}
function alert($name,$url){
//    $res = "<script language=\"JavaScript\">alert(\"你好\");</script>";
    $res = "<script language=\"JavaScript\">;alert(\"".$name."\");location.href=\"".$url."\";</script>";
    return $res;
}
function del_shopping_book($bookid,$u_id){
    require_once 'common/library/Db.php';
    $db = Db::getInstance();
    $sql = "DELETE FROM `shopping` WHERE `u_id`={$u_id} and `b_id`={$bookid};";
    $res = $db->write($sql);
    return $res;
}
?>