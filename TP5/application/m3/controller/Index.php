<?php
	namespace app\m3\controller;
	use think\Controller;
	use app\m3\model\Student;
	
	class Index extends Controller{
		
		public function showAll(){
			$list = Student::all();
			$this->assign('list',$list);
			return $this->fetch();
		}
	}
?>