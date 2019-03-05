<?php 
	
	//增加命名空间
	namespace Home\Controller;
	//引入其他空间的类
	use \Core\HomeController;
	//新建类                        Core
	class IndexController extends HomeController{


		//创建index方法
		/*
		 * 默认的访问方法
		 */
	    function index(){

	    	//1、根据电影的id=36查询，电影下所有的子级分类
	    	//   去 film_type表中查询 所有 pid=36,因为分类为“电影”的id为36
	    	$filmtypeModel = new \Model\FilmtypeModel;
	    	$subtypes = $filmtypeModel -> getAllSubTypes(36);

	    	//查询所有的根级分类
	    	$types = $filmtypeModel->getAllSubTypes(0);

	    	//实例化电影模型的对象
	    	$filmModel = new \Model\FilmModel;

	    	//传递给首页的
	    	/*
	    	
             array(
		
				0=> array('typename'=>'xxxxx',
				          'films' => 10条数据)
				1=> array('typename'=>'类型1',
				          'films' => 10条数据)
				2=> array('typename'=>'类型2',
				          'films' => 10条数据)
				....

             )

	    	 */
	    	$data = array();
	    	
	    	//2、循环遍历每个电影的子级分类，并且每个分类去film表查找10条影片数据,条件
	    	for($i=0;$i<count($subtypes);$i++){
	    		//把类型名称保存到数组中
	    		$data[$i]['typename'] = $subtypes[$i]['name'];
	    		//把10条数据保存到$data数组中
	    		$data[$i]['films'] = $filmModel -> findAllById($subtypes[$i]['id'],10);

	    	}
	    	//把含有数据的数组分配到模板页中
	    	$this->assign("data",$data);
	    	//把所有的根级分类分配到模板页中
	    	$this->assign("types",$types);
	    	// include_once APP.PLAT."/View/".CONTROLLER."/index.html";
	    	$this->display("index.html");
	    }


	    //测试操作成功的跳转方法
	    function testSuccess(){

	    	//调用方法
	    	$this->success("home","user","getAllUser","哎呀妈呀，操作成功!",3);


	    }

	    //测试操作成功的跳转方法
	    function testError(){

	    	//调用方法
	    	$this->error("home","user","getAllUser","服务器发生地震!",5);


	    }

	    //测试文件上传
	    function testUpload(){

	    	global $config;

	    	var_dump($config['upload']);


	    }

	    //测试bootstrap的使用
	    function testboot(){

	    	$this->display("test_boot.html");
	    }



	}



 ?>