<?php 

	namespace Admin\Controller;
	use \Core\AdminController;
	//后台首页默认控制器
	class IndexController extends AdminController{


		function index(){

			//显示后台登录首页
			$this->display("index.html");

		}


		function main(){
			
			if(!defined("LOGINACCESS")){
				//跳转到登录页面
				$this->index();
			}else{
				var_dump($this);
				$this->display("main.html");
			}


		}

	}

 ?>