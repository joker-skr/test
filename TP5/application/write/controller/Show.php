<?php
	namespace app\write\controller;
    use think\Controller;
    use app\write\model\Zd;
    use think\Session;
    
	class Show extends Controller{
		public function index(){
			$list = Zd::all();
			$this->assign('list',$list);
			return $this->fetch();
		}
}

?>