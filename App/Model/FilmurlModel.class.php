<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class FilmurlModel extends Model {

		//定义table属性
		public $table = "film_url";

		/*
		 * 查询所有的数据
		 */
		function findAll(){

			//1、拼接sql语句
			$sql = "select *,concat(path,'-',id) dpath  from ".$this->getTableName()." order by dpath";
			
			//2、调用父类的方法，进行查询
			return $this->getAll($sql,$data=[]);
			//3、返回结果给控制器
		}

		/**
		 * [pageList 分页查询数据]
		 * @return Array
		 */
		function pageList($k){

			//从配置文件中获取配置
			global $config;
			$pageSize = $config['pageSize']['admin_pagesize'];

			$likeStr = "";
			//判断$k的值，如果值为"" 表示没有进行搜索或者搜索框灭有内容
			//否则，用关键字拼接sql的字符串
			if($k!=""){

				//   拼接 like 语句
				//   name like '%$k%'
				$likeStr .= "   and (name like '%$k%' or name_en like '%$k%'  or film_typename like '%$k%' or main_actor like '%$k%')  ";
			}

			//1、查询总的纪录数
			$sql = "select count(*) from ".$this->getTableName()." where 1=1 ".$likeStr;

			//2、把总总记录数和每页大小，作为参数，调用分页类makePage
			$totalCount = $this->getFirstFeild($sql,$data=[]);

			//3、调用makePage 后，返回一个数组，数组
			//   $pageArr['limit']       limit a,b
			//   $pageArr['pageStr'];    页码的html
			$pageArr = \Page::makePage($totalCount,$pageSize);

			//4、定义sql语句 查询数据
			$sql = "select * from ".$this->getTableName()." where 1= 1 {$likeStr} ".$pageArr['limit'];
			//5、查询数据，调用getAll()
			$arr['data'] = $this->getAll($sql,$data=[]);
			$arr['pageStr'] = $pageArr['pageStr'];

			return $arr;
		}

		/*
		 * 定义方法，保存新的分类
		 */
		function addInfo($data){

			$sql = "insert into ".$this->getTableName()." values(null,:url,:hashurl,:filmtypeid,:page,:addTime,:is_down)";

			//           调用父类 Model方法
			return $this->exec($sql,$data);

		}


		/*
		 * 定义方法，保存新的分类
		 */
		function updateInfo($data){

			$sql = "update ".$this->getTableName()." set rules_name =:rname , rules_desc=:desc , url=:url , content=:content , type=:type , start_page =:start , end_page=:end , pid=:pid , path=:path  where id=:id";

			//           调用父类 Model方法
			return $this->exec($sql,$data);

		}

		/**
		 * 根据id删除 数据
		 */
		function delete($id){
			//定义sql
			$sql = "delete from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $id;
			//调用父类的Model的exec方法，执行
			return $this->exec($sql,$data);

		}


		function findRowById($id){

			$sql = "select * from ".$this->getTableName()." where id=:id";
			//保存参数到数组中
			$data[':id'] = $id;
			return $this->getRow($sql,$data);

		}

		function url_exists($hashurl){

			$sql = "select id from ".$this->getTableName()." where url_hash=:hashurl";
			$data[':hashurl'] = $hashurl;
			if($this->getFirstFeild($sql,$data)){
				return true;
			}
			return false;
		}	

		function getMaxTimeByType($filmtypeid){
			$sql = "select UNIX_TIMESTAMP(max(add_time)) from dy_film_url where filmtypeid = :filmtypeid";
			$data[':filmtypeid'] = $filmtypeid;

			return $this->getFirstFeild($sql,$data);
		}

		function findUrlByFilmtypeid($filmtypeid){

			$sql = "select * from ".$this->getTableName()." where filmtypeid =:filmtypeid";
			//保存参数到数组
			$data[':filmtypeid'] = $filmtypeid;

			return $this->getAll($sql,$data);

		}

		function updateDownState($urlid){
			$sql = "update ".$this->getTableName()." set is_download = 1 where id=:$urlid";

			$data[':urlid']=$urlid;

			return $this->exec($sql,$data);
		}


	}

 ?>