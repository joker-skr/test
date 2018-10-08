<?php
    namespace app\write\controller;
    use think\Controller;
    use app\write\model\User;
    use think\Session;

    class Pwd extends Controller{
        private $seed = "!@AzAB12+/*";
        public function index(){
           //echo $_SESSION['userid'];  检验session传值的正确性
            return $this->fetch();
        }
        public function check(){
            $_SESSION['name'];
            $user = User::get($_SESSION['name']);
            if($user == null){
                $this -> error("数据已经不存在！");
                return;
            }
            $this -> assign("User",$user);
            return $this->fetch();
        }
        public function update($newpwd = null,$erpwd = null){
            $user = User::get($_SESSION['name']);
            if($newpwd != $erpwd){
                echo "<script>alert('两次密码输入不正确，请重新输入');window.history.back();</script>";
                return;
            }
            $result = $user->save(
                ['pwd' => md5(md5($newpwd).$this->seed)],['id' => $_SESSION['name']]
            );
            if($result){
                $this -> success("信息修改成功！请重新登录","/write/index/loginOut");
            }else{
                $this -> error("数据更新失败");
            }
        }
    }