<?php 

	//命名空间
	namespace Model;
	use \Core\Model;
	//创建模型类
	class UserModel extends Model{

		protected $table = 'user';

		/*
		* 查询所有的User表中的数
		*/
		function findAll($data=[]){

			//定义sql
			$sql = "select * from {$this->getTableName()}";
			//返回一个数组
			return $this->getAll($sql,$data);

		}


		/*
		* 根据用户名查询用户信息是否存在
		*/
		function getUserInfoByName($username){

			//保存用户名到数组中
			$data[':name'] = $username;
			//定义sql
			$sql = "select * from ".$this->getTableName()." where username =:name";

			//调用底层方法，返回一行数据
			return $this->getRow($sql,$data);
			
		}


	}



 ?>