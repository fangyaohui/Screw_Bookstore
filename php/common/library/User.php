<?php
    class User{
        private  $u_id;//用户id
        private  $u_username;//用户用户名
        private  $u_password;//用户密码
        private  $u_sex;//用户性别
        private  $u_mail;//用户邮箱
        private  $u_phone;//用户电话号码
        private  $u_integral;//用户积分
        private  $u_role;//用户角色
        private  $u_code;//用户激活码
        private  $u_time;//用户注册时间
        private  $u_tips;//用户签名
        public function __construct($data){
            $this->u_id = $data['u_id'];
            $this->u_username = $data['u_username'];
            $this->u_password = $data['u_password'];
            $this->u_sex = $data['u_sex'];
            $this->u_mail = $data['u_mail'];
            $this->u_phone = $data['u_phone'];
            $this->u_integral = $data['u_integral'];
            $this->u_role = $data['u_role'];
            $this->u_code = $data['u_code'];
            $this->u_time = $data['u_time'];
            $this->u_tips = $data['u_tips'];
        }
        public function save_user(){
            require_once 'Db.php';
            $db = Db::getInstance();
            $sql = "update `users` set `u_username`='{$this->u_username}',`u_password`='{$this->u_password}',`u_sex`='{$this->u_sex}',`u_mail`='{$this->u_mail}',`u_phone`='{$this->u_phone}',`u_integral`='{$this->u_integral}',`u_role`='{$this->u_role}',`u_code`='{$this->u_code}',`u_time`='{$this->u_time}',`u_tips`='{$this->u_tips}' where `u_id`='{$this->u_id}';";
            $res = $db->write($sql);
            if ($res!=false){
                return true;
            }else{
                return false;
            }
        }
        /**
         * @return mixed
         */
        public function getUId()
        {
            return $this->u_id;
        }

        /**
         * @param mixed $u_id
         */
        public function setUId($u_id)
        {
            $this->u_id = $u_id;
        }

        /**
         * @return mixed
         */
        public function getUUsername()
        {
            return $this->u_username;
        }

        /**
         * @param mixed $u_username
         */
        public function setUUsername($u_username)
        {
            $this->u_username = $u_username;
        }

        /**
         * @return mixed
         */
        public function getUPassword()
        {
            return $this->u_password;
        }

        /**
         * @param mixed $u_password
         */
        public function setUPassword($u_password)
        {
            $this->u_password = $u_password;
        }

        /**
         * @return mixed
         */
        public function getUSex()
        {
            return $this->u_sex;
        }

        /**
         * @param mixed $u_sex
         */
        public function setUSex($u_sex)
        {
            $this->u_sex = $u_sex;
        }

        /**
         * @return mixed
         */
        public function getUMail()
        {
            return $this->u_mail;
        }

        /**
         * @param mixed $u_mail
         */
        public function setUMail($u_mail)
        {
            $this->u_mail = $u_mail;
        }

        /**
         * @return mixed
         */
        public function getUPhone()
        {
            return $this->u_phone;
        }

        /**
         * @param mixed $u_phone
         */
        public function setUPhone($u_phone)
        {
            $this->u_phone = $u_phone;
        }

        /**
         * @return mixed
         */
        public function getUIntegral()
        {
            return $this->u_integral;
        }

        /**
         * @param mixed $u_flag
         */
        public function setUIntegral($u_integral)
        {
            $this->u_integral = $u_integral;
        }

        /**
         * @return mixed
         */
        public function getURole()
        {
            return $this->u_role;
        }

        /**
         * @param mixed $u_role
         */
        public function setURole($u_role)
        {
            $this->u_role = $u_role;
        }

        /**
         * @return mixed
         */
        public function getUCode()
        {
            return $this->u_code;
        }

        /**
         * @param mixed $u_code
         */
        public function setUCode($u_code)
        {
            $this->u_code = $u_code;
        }

        /**
         * @return mixed
         */
        public function getUTime()
        {
            return $this->u_time;
        }

        /**
         * @param mixed $u_time
         */
        public function setUTime($u_time)
        {
            $this->u_time = $u_time;
        }

        /**
         * @return mixed
         */
        public function getUTips()
        {
            return $this->u_tips;
        }

        /**
         * @param mixed $u_tips
         */
        public function setUTips($u_tips)
        {
            $this->u_tips = $u_tips;
        }
    }
?>