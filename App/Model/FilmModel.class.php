<?php 

	//定义命名空间
	namespace Model;
	use \Core\Model;

	class FilmModel extends Model {

		//定义table属性
		public $table = "film";

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

		/**
		 * [pageList 分页查询数据]
		 * @return Array
		 */
		function pageListHome($k,$y,$filmtypeid){

			//从配置文件中获取配置
			global $config;
			$pageSize = $config['pageSize']['home_pagesize'];

			$likeStr = "";
			//判断$k的值，如果值为"" 表示没有进行搜索或者搜索框灭有内容
			//否则，用关键字拼接sql的字符串
			if($k!=""){
				//   拼接 like 语句
				//   name like '%$k%'
				$likeStr .= "  and (film_typename like '%$k%') ";
			}
			if($y!=""){
				$likeStr .="   and (year like '%$y%') ";
			}

			//1、查询总的纪录数
			$sql = "select count(*) from ".$this->getTableName()." where type_id=:filmtypeid ".$likeStr;

			$data[':filmtypeid'] = $filmtypeid;
			//2、把总总记录数和每页大小，作为参数，调用分页类makePage
			$totalCount = $this->getFirstFeild($sql,$data);

			//3、调用makePage 后，返回一个数组，数组
			//   $pageArr['limit']       limit a,b
			//   $pageArr['pageStr'];    页码的html
			$pageArr = \Page::makePage($totalCount,$pageSize);

			//4、定义sql语句 查询数据
			$sql = "select id,douban_score,name_en,film_time,film_typename,file_poster from ".$this->getTableName()." where type_id=:filmtypeid  {$likeStr} order by pubtime2 desc ".$pageArr['limit'];
			//5、查询数据，调用getAll()
			$arr['data'] = $this->getAll($sql,$data);
			$arr['pageStr'] = $pageArr['pageStr'];

			return $arr;
		}

		/*
		 * 定义方法，保存新的分类
		 */
		function addInfo($data){

			/*
			  0 => string '2018年科幻动作《移动迷宫3：死亡解药》BD中英双字幕' (length=70)
			  1 => string 'http://www.imageto.org/images/00EAo.jpg' (length=39)
			  2 => string '移动迷宫3：死亡解药/移动迷宫3/死亡解药' (length=55)
			  3 => string 'The Maze Runner: The Death Cure' (length=31)
			  4 => string '2018' (length=4)
			  5 => string '美国' (length=6)
			  6 => string '动作/科幻/冒险' (length=20)
			  7 => string '英语' (length=6)
			  8 => string '中英双字幕' (length=15)
			  9 => string '2018-01-26(美国)/2018-01-26(中国)' (length=37)
			  10 => string '6.8' (length=3)
			  11 => string '5.5' (length=3)
			  12 => string 'x264 + aac' (length=10)
			  13 => string '1280 x 720' (length=10)
			  14 => string '1CD' (length=3)
			  15 => string '142分钟' (length=9)
			  16 => string '韦斯&middot;鲍尔 Wes Ball' (length=29)
			  17 => string '迪伦&middot;欧布莱恩 Dylan O'Brien <br />　　　　　　卡雅&middot;斯考达里奥 Kaya Scodelario <br />　　　　　　李起弘 Ki Hong Lee <br />　　　　　　托马斯&middot;布罗迪-桑斯特 Thomas Brodie-Sangster <br />　　　　　　罗莎&middot;萨拉查 Rosa Salazar <br />　　　　　　德克斯特&middot;达登 Dexter Darden <br />　　　　　　艾丹&middot;吉伦 Aidan Gillen <br />　　　　　　威尔&middot;保尔特 Will Poulter <br />　　　　　　�'... (length=705)
			  18 => string '《移动迷宫3》作为系列最终章，沿袭系列一贯以来的劲爆动作戏和快节奏跑酷风，主要讲述迪伦&middot;奥布莱恩饰演的托马斯率领的好莱坞&ldquo;跑男团&rdquo;在经历了迷宫逃脱和末日丧尸的生死考验后，终于迎来最后的正邪较量。 <br />　　 <br /><img border="0" src="http://www.imageto.org/images/1zisf.jpg" alt="" /> ' (length=394)
			  19 => string '' (length=0)
			  20 => string 'http://www.imageto.org/images/1zisf.jpg' (length=39)
			  21 => string 'ftp://ygdy8:ygdy8@yg45.dydytt.net:3066/阳光电影www.ygdy8.com.移动迷宫3：死亡解药.HD.720p.中英双字幕.mkv' (length=121)
			  22 => string '46' (length=2)
			  23 => string 'aaa' (length=3)

			 */

			$sql = "insert into ".$this->getTableName()."(id,name_cn,file_poster,name_en,film_name,year,place_production,film_typename,language,subtitle,pubtime,imdb_score,douban_score,format,pixel,size,film_time,director,main_actor,content,film_winning,desc_img,down_url,type_id,add_user,add_time) values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now())";

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

		function findAllById($id,$num){

			$sql = "select * from ".$this->getTableName()." where type_id =:id limit ".$num;
			//保存参数到数组中
			$data[':id'] = $id;
			return $this->getAll($sql,$data);

		}


	}

 ?>