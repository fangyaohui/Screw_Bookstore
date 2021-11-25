<?php

//数据库操作类
class Db
{
    private $host;
    private $port;
    private $user;
    private $pass;
    private $dbname;
    private $charset;

//    实现数据的初始化：灵活性（允许外部修改）和通用性（给定默认值）
    public function __construct(array $arr = array())
    {
//        完成初始化
        $this->host = isset($arr['host']) ? $arr['host'] : '127.0.0.1';
        $this->port = isset($arr['port']) ? $arr['port'] : '3306';
        $this->user = isset($arr['user']) ? $arr['user'] : 'fang';
        $this->pass = isset($arr['pass']) ? $arr['pass'] : '123456';
        $this->dbname = isset($arr['dbname']) ? $arr['dbname'] : 'shopping';
        $this->charset = isset($arr['charset']) ? $arr['charset'] : 'utf8';
//    对象调用构造方法,永远不需要它的返回值
//        实现初始化数据库操作
        if(!$this->connect()) return; # 为了中断执行,初始化连接.加载时,连接数据库
        $this->charset(); //可以初始化字符集,当对象加载时,附上默认字符集
    }

    # 对外提供属性，记录错误数据（外部如何处理，不需要我们管）
    public $errno;
    public $error;
    # mysqli的连接资源对象是任何mysqli扩展操作的基础，因此需要该连接对象能够在其他方法中使用：属性处理
    private static $link;
    private static $instance;
    public static function getInstance(){
        return self::$instance?:(self::$instance = new self());
    }
    # 在上述类中增加一个方法：实现连接认证功能
    private function connect()
    {
        # 利用属性可以跨方法访问：5个参数分别为：主机、用户名、密码、数据库、端口
        # 利用错误抑制符抑制可能出现的错误
        self::$link = @mysqli_connect($this->host, $this->user, $this->pass, $this->dbname, $this->port);
        if (!self::$link) {
//            记录错误信息 返回false
            $this->errno = mysqli_errno();
            $this->error = iconv('utf-8', 'gbk', mysqli_error()); #第一个参数原来的，第二个要转成的字符集
        }
        #正确返回
        return true;
    }

//    字符集设置
    private function charset()
    {
//        利用mysqli实现字符集设置
//            这个结果，不需要给外部使用，所以使用局部变量$res
        $res = @mysqli_set_charset(self::$link, $this->charset);
//            判定结果
        if (!$res) {
            $this->errno = mysqli_errno(self::$link);
            $this->error = mysqli_error(self::$link);
            return false;
        }
//            正确操作
        return true;
    }

//        SQL执行检查
    private function check($sql)
    {
        #mysqli_query执行
        $res = mysqli_query(self::$link, $sql);
//            判断错误
        if (!$res) {
            $this->errno = mysqli_errno(self::$link);
            $this->error = mysqli_error(self::$link);
            return false;
        }
//        成功返回结果
        return $res;
    }

//    写操作
    public function write($sql)
    {
//        调用SQL检查方法，检查和执行
        $res = $this->check($sql);
//        根据结果判定： 如果$res是true，说明执行成功，应该获取受影响的行数，如果为false就返回false
        return $res ? mysqli_affected_rows(self::$link) : false;
    }

//    获取自增长ID的方法
    public function insert_id()
    {
        return mysqli_insert_id(self::$link);
    }

//    读取操作，一条记录
//    定义属性，记录读取的列数
    public $columns = 0;

    public function read_one($sql)
    {
//        执行检查
        $res = $this->check($sql);
//        判定结果
        if ($res) {
//            有结果
            $this->columns = @mysqli_field_count(self::$link);
            return mysqli_fetch_assoc($res);
        }
//        没有结果
        return false;
    }

//    读取多条记录
//    定义属性,记录行数
    public $rows;

    public function read_all($sql)
    {
//        执行检查
        $res = $this->check($sql);
//        错误检查
        if (!$res) return false;
//        结果正确
//        记录行
        $this->rows = @mysqli_num_rows($res);
//        记录列
        $this->columns = @mysqli_field_count(self::$link);
//        获取所有记录,形成二维数组
        $list = [];
        while ($row = mysqli_fetch_assoc($res)) $list[] = $row;
//        返回结果
        return $list;
    }




}

$s1 = Db::getInstance();
//
//$res = $s1->read_all("select * from users");
//$u_id = $s1->insert_id();
//$u_time = date('Y-m-d h:i:s',time());
//echo $u_time;

$time = time()+21341;
$key = "123";
$data = ["id"=>'1234'];
$sql = "REPLACE INTO `session` SET `session_key` = '{$key}',`expiry_time`='{$time}', `session_data`='{$data}'";
$res = $s1->write($sql);
echo $res;

$now = time();
$sql = "SELECT `session_data` FROM `session` WHERE `session_key` = '{$key}' AND `expiry_time` > '{$now}';";
$res = $s1->read_all($sql);
print_r($res);

$expiry_time = time();
$sql = "DELETE FROM `session` WHERE `expiry_time`<'{$expiry_time}';";
$res = $s1->write($sql);
echo $res;

$key = "sdfas";
$sql = "DELETE FROM `session` WHERE `session_key` = '{$key}'";
$res = $s1->write($sql);
echo $res;


//$res = $s1->write("insert into users values({$u_id},'gyn','489360698','男','489360698@qq.com','412341234','1','1','1234','2021-11-15 08:21:23',' ');");
//var_dump($res);
////echo mysqli_query("insert into users values('100','gyn','489360698','男','489360698@qq.com','412341234','1','1','1234','12341234','2021-11-15 08:21:23');");
//echo $s1->insert_id();
//echo $s1->errno, $s1->error;

