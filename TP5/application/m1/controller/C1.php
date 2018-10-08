<?php
	namespace app\m1\controller;

	use think\Controller;

	class C1 extends Controller
{

	public function index()
	{
		$this->assign("name","chinese");
		// 渲染模板输出
		return $this->fetch();
	
	}
	public function jsonTest()
    {
		$list = array(
		
		'name'=>'qdasd',
		'birthday'=>'1997-02-28',
		'sex'=>'男'
		);
        return json_encode($list);
    }
	
	public function bootstrap(){
		return view();
	}
	public function bootstrap3(){
		return view();
	}
}
?>