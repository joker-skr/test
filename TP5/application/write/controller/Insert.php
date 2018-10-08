<?php
    namespace app\write\controller;
    use think\Controller;
    use app\write\model\User;

    class Insert extends Controller
    {
        private $seed = "!@AzAB12+/*";
        public function index()
        {
            return $this->fetch();
        }
        public function insert($userid = null,$pwd = null,$email = null)
        {
            if($userid == null){
                return "<script>alert('请输入id');window.history.back();</script>";
            }
            if($pwd == null){
                return "<script>alert('请输入密码');window.history.back();</script>";
            }
            if($email == null){
                return "<script>alert('请输入邮箱');window.history.back();</script>";
            }
            $user = new User;
            $user->userid=$userid;
            $user->pwd= md5(md5($pwd).$this->seed);
            $user->email=$email;
            $user -> save();
            echo "<script>alert('用户注册成功');window.history.back();window.history.back();</script>";
        }
    }
