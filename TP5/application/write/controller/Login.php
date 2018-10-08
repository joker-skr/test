<?php
    namespace app\write\controller;
    use think\Controller;
    use app\write\model\User;
    use think\Session;

    class Login extends Controller{
        private $seed = "!@AzAB12+/*";

        public function index(){
            return $this->fetch();
        }

        public function check($userid = null,$pwd = null,$name = null){
            $user = User::get([
                'userid' => $userid,
                'pwd' => md5(md5($pwd).$this->seed)
            ]);

            if($user){
                Session::set('username',$userid);//创建一个session变量
                $this->success('登录成功，正在为你跳转.........','/write/index/index');
                //return file_get_contents(url('/write/index/index','',true,true));
                }else{
                    return $this->error('请输入正确的账号或者密码！');
                }
        }
    }