<?php 

    //想把user表中数据读取出来，并且显示
    //1）建立一个UserController,专门处理User表相关的业务逻辑
    //2）建立一个UserModel 类，专门用来连接数据库，并且获取数据
    //3）建立User控制器对应的视图文件

	// index.php?p=home&c=user&a=getAllUser

	//定义命名空间  Home\Controller空间
	namespace Home\Controller;
	use \Core\HomeController;

	//创建类
	class UserController extends HomeController{
		/*
		 * 定义一个方法，获取所有的User数据，并且显示出来
		 */

		function getAllUser(){
			//  UserController    getAllUser
			//echo __CLASS__."--->".__METHOD__;

			//调用模型类，获取数据
			//1)引入模型类文件
			// require_once APP."Model/UserModel.class.php";
			//2)实例化 UserModel类的对象
			$userModel = new \Model\UserModel;
			
			//此处要调用模型类的方法，获取所有的用户信息
			$dataArr = $userModel->findAll();
			
			//加载视图文件，显示数据
			// App/Home/View/User/user_list.html
			// include_once APP.PLAT."/View/".CONTROLLER."/user_list.html";
			// 

			$this->assign("dataArr",$dataArr);
			$this->display("user_list.html");


		}

	}

 ?>