<?php 
	//定义命名空间
	namespace Admin\Controller;
	//引入核心空间的类
	use \Model\UserModel;
	use \Core\AdminController;

	//定义类
	class UserController extends AdminController {


		//检查用户名是否存在
		function doLogin(){
			// session_start();  //开启session
			if(!isset($_POST['uname'])) $this->error("Admin","index","index","无权限直接访问！",2);
			//获取参数
			$uname = $_POST['uname'];
			$upass = $_POST['upass'];
			$code = $_POST['validateCode'];
			//判断
			if(strtolower($code)!=strtolower($_SESSION['validateCode'])){
				$this->error("Admin","index","index","验证码错误！",2);
				exit;
			}


			//调用模型获取数据
			$userModel = new UserModel;
			$user = $userModel->getUserInfoByName($uname);

			//判断是否查询到信息
			if(!$user){
				$this->error("Admin","index","index","用户名不存在!",5);
			}
			
			//判断密码输入是否正确
			
			if($user['passwd']!=md5($upass)){
				$this->error("Admin","index","index","密码输入不正确!",5);
			}

			//设置登录常量
			define("LOGINACCESS", true);
			$_SESSION['username'] = $uname;
			$_SESSION['userid'] = $user['id'];
			//显示main模板页
			$this->display(APP.PLAT."/View/Public/main.html");

		}







	}















 ?>