<?php
class SessionDb
{
    private $db;				// 设置数据库变量
    private $expiry = 360000;		// 设置Session失效时间

    public function __construct()
    {
        session_set_save_handler(array(& $this,'_session_open'),
            array(& $this,'_session_close'),
            array(& $this,'_session_read'),
            array(& $this,'_session_write'),
            array(& $this,'_session_destroy'),
            array(& $this,'_session_gc')
        );
    }

    public function _session_open($save_path,$session_name)
    {
        $this->db = mysqli_connect('localhost','fang','123456') or die ("数据库连接失败！");
        mysqli_select_db($this->db,"shopping");
        return (bool) $this->db;
    }

    public function _session_close()
    {
        return mysqli_close($this->db);
    }

    public function _session_read($key)
    {
        $time = time();							// 设定当前时间
        $sql = "SELECT `session_data` FROM `session` WHERE `session_key` = '{$key}' AND `expiry_time` > '{$time}';";

//        $sql = "select session_data from `session` where session_key = '$key' and session_time > '{$time}'";
        $result = mysqli_query($this->db,$sql)->fetch_assoc()['session_data'];
        return (string)$result;
//        $row = mysqli_fetch_assoc($result);
//        echo $row;
//        if ($row)
//        {
//            return $row['session_data'];			// 返回Session名称及内容
//        }else
//        {
//            return false;
//        }
    }

    public function _session_write($key,$data)
    {
        $lapse_time = time() + $this->expiry;					// 得到Unix时间戳
        $sql = "REPLACE INTO `session` SET `session_key` = '{$key}',`expiry_time`='{$lapse_time}', `session_data`='{$data}'";
        $stmt = mysqli_prepare($this->db,$sql);
        $stmt->bind_param('sbs',$key,$data,$lapse_time);
        return true;
//        $sql = "select `session_data` from `session` where `session_key` = '{$key}' and session_time > '{$lapse_time}'";
//        $result = mysqli_query($this->db,$sql);
//        if (mysqli_num_rows($result) == 0 )				// 没有结果
//        {
//            $sql = "insert into `session` values('{$key}','{$data}','{$lapse_time}')";		// 插入数据库sql语句
//            $result = mysqli_query($this->db,$sql);
//        }else
//        {
//            $sql = "update `session` set session_key = '{$key}',session_data = '{$data}',session_time = '{$lapse_time}' where session_key = '{$key}'";												// 修改数据库sql语句
//            $result = mysqli_query($this->db,$sql);
//        }
//        return true;
    }

    public function _session_destroy($key)
    {
        $sql = "DELETE FROM `session` WHERE `session_key` = '{$key}'";
        return (bool) mysqli_query($this->db,$sql);
//        $sql = "delete from `session` where session_key = '{$key}'";					// 删除数据库sql语句
//        $result = mysqli_query($this->db,$sql);
//        return($result);
    }

    public function _session_gc($expiry_time)
    {
//        $expiry_time = time();// 将参数$expiry_time赋值为当前时间戳
        $sql = "DELETE FROM `session` WHERE `expiry_time`<'{$expiry_time}';";
        $result = mysqli_query($this->db,$sql);
        return (bool) $result;
//        $sql = "delete from `session` where expiry_time < '{$expiry_time}'";	// 删除数据库sql语句
//        $result = mysqli_query($this->db,$sql);
//        return($result);
    }
}
//session_save_path("E:\phpStudy\phpstudy_pro\Extensions\mp\mp");

$_session_new = new SessionDb();
session_start();
$_SESSION['SID'] = true;
$_SESSION['asdf'] = "asdfasd";
?>