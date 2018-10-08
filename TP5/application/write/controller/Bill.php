<?php
	namespace app\write\controller;
    use think\Controller;
    use app\write\model\Zd;
    use think\Session;
    
	class Bill extends Controller{
		 public function index(){
            return $this->fetch();
        }
        public function create(){
		$data = input("post.");
		//dump($data);die;
		if($data['type'] == null){
			$this->error("账单类型不能为空");
		}
		if($data['name'] == null){
			$this->error("账单名称不能为空");
		}
		if($data['date'] == null){
			$this->error("账单日期不能为空");
		}
		if($data['price'] == null){
			$this->error("价格不能为空");
		}
		
		$zd = new Zd;
		$zd->type = $data['type'];
		$zd->name = $data['name'];
		$zd->date = $data['date'];
		$zd->price = $data['price'];
		$zd->comment = $data['comment'];
		if($zd->save()){
			$this->success('录入账单成功','/write/Bill');
		}
	}

}

?>