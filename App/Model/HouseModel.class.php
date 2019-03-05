<?php 

	namespace Model;
	use \Core\Model;

	class HouseModel extends Model {
		//定义模型对应的表名
		protected $table = 'house';

		public function page($data=[])
		{
			//定义sql语句，获得总记录数
			$sql = "select count(*) from ".$this->getTableName();
			$count = $this->getFirstFeild($sql,$data);

			//制作分页
			$pageArr = \Page::makePage($count,2);
			$sql = "select * from ".$this->getTableName()." ".$pageArr['limit'];
			$resultArr = $this->getAll($sql,$data);

			//输出页码
			$pageArr['pageStr'];

			//返回数组
			$arr['data'] = $resultArr;
			$arr['pageStr'] = $pageArr['pageStr'];

			return $arr;

		}



	}




 ?>