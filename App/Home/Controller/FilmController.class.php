<?php 

	namespace Home\Controller;
	//HomeController  在Core文件夹下，并且命名空间 Core
	use \Core\HomeController;

	class FilmController extends HomeController{
		/*
		 *  getAllTypes() 方法
		 *  主要的作用查询所有的分类
		 */
		function doList(){

			//接收要搜索的关键字
			$k = isset($_GET['k']) ? $_GET['k'] : "" ;
			$y = isset($_GET['y']) ? $_GET['y'] : "" ;
			$tname = isset($_GET['tname']) ? $_GET['tname'] : "" ;



			// 1，接收typeid-->36,如果没有传递id,默认显示电影（id为36）列表
			$tid = isset($_GET['tid']) ? $_GET['tid'] : 36 ;
			// 2，根据36，查询所有pid为36 （查询id为36的分类的所有的子级分类）
			$filmtypeModel = new \Model\FilmtypeModel;
			// 3，取出第一个分类（最新电影【46】）
			$subtypes = $filmtypeModel -> getAllSubTypes($tid);

			//判断tid是否存在
			$filmtypeid = isset($_GET['sid']) ? $_GET['sid'] : $subtypes[0]['id'] ;
			
			//当前电影所有子级分类中第一个子级分类的id
			          
			// 4，根据最新电影id去 film表查询，filmtypeid=46 ,查询18条(分页)
			//1）调用模型查询数据
			$filmModel = new \Model\FilmModel;
			//2）把查询的数据分配到模板中
			$arr = $filmModel->pageListHome($k,$y,$filmtypeid);




			//取出所有的根级分类，用于初始化导航栏
	    	$types = $filmtypeModel->getAllSubTypes(0);
			//
			// 5，把查询的结果分配到模板页
			// $arr['data'] = 数据
			// $arr['pageStr'] = 分页html代码
			//$arr 包含两部分信息
			//1，页码的 html代码
			//2, 查询的数据（二维数组）
			//3）display 显示指定的模板
			$this->assign("tid",$tid);
			$this->assign("sid",$filmtypeid);
			$this->assign("dataArr",$arr);
			$this->assign("types",$types);
			$this->assign("k",$k);
			$this->assign("y",$y);
			$this->assign("subtypes",$subtypes);  //所有电影的子级分类
			//分配类型名称到模板页
			$this->assign("tname",$tname);
			$this->display("list.html");   
		}






		/**
		 * 根级id查询一条影片的信息
		 */
		
		function findFilmById(){

			//判断id是否存在
			if(!isset($_GET['id'])) {
				$this->error("home","index","index","参数错误!");
			}

			//接收id
			$id = $_GET['id'];

			//根据影片的id查询影片信息
			$filmModel = new \Model\FilmModel;
			$film = $filmModel -> findRowById($id);

			// var_dump($film);
			// 把查询的结果分配到模板页中
			$this->assign("film",$film);
			$this->display("content.html");

		}



	}





 ?>