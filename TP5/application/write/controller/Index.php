<?php
    namespace app\write\controller;
    use think\Controller;
    use think\Session;

    class Index extends Controller{
    	public function _initialize()
    	{
        	if(!Session::has('username')){
        		$this ->error('请先登录','write/login/index');
        	}
    	} 
        public function index($name = null){
            $name = Session::get('username');
            $_SESSION['name'] = $name;
            //Session::has('name');

            return $this->fetch();
        }
        public function loginOut()
        {
            echo "<script>alert('您已成功注销登录，正在为你跳转至登录');</script>";
            Session::clear();
            $this -> redirect(('write/login/index'), '正在退出登录...');
        }
    }