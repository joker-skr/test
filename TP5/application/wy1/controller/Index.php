<?php

	namespace app\wy1\controller;
	
	use think\Controller;
	
	class Index extends Controller {
		public function Index() {
			return $this->fetch();
		}
		
		public function Page2() {
			return $this->fetch();
		}
	}