<?php
	namespace app\m2\controller;
	use think\Controller;
	use app\m2\model\User;
	
	class Index extends Controller{

		public function showAll(){
			$list = User::all();
			$this->assign('list',$list);
			return $this->fetch();
		}
		public function create(){
			return $this->fetch();
		}
		public function create1($name = null,$mobile=null,$address=null){
			if($name == null){
			return "姓名不能为空";
			}
			if($mobile == null){
			return "电话不能为空";
			}
			if($address == null){
			return "地址不能为空";
			}
			$user = new User;
			$user -> name = $name;
			$user -> mobile = $mobile;
			$user -> address = $address;


			$user -> save();
			return "插入数据成功！";
		}
		public function delete($id = null){
			if($id==null){
				return "删除数据编号不能为空";
			}
			$user = User::get($id);
			if ($user == null){
				$this -> error ('数据不存在');
				return;
			}
			$result = $user -> delete();
			if ($result){
				$this -> success("删除成功");
			}
			else{
				$this -> error("删除失败");
			}
			
		}
		public function update($id = null){
			if ($id == null) {
				$this->error("更新失败，ID不能为空");
				return;
			}
			$user = User::get($id);
			if($user == null){
				$this->error("数据不存在");
				return;
				}

			$this->assign('user',$user);
				return $this->fetch();
				}
				
		public function update1($id = null){
			/*if ($id == null) {
				$this->error("更新失败，ID不能为空");
				return;
			}*/
			$user = User::get($id);
			if ($id == null) {
				$this->error("更新失败,数据不存在");
				return ;
			}
			$result = $user -> save($_POST,['id'=>$id]);
			if($result){
				$this->success("更新成功","/m2/index/showAll");
			}
			else{
				$this->error("更新失败",User::getLastSql());
			}
		}
		public function holiday(){
			
			return $this->fetch('holiday');
		}
		public function demo(){
			
			return $this -> fetch('demo');
		}
	}
?>