<?php 
	
	namespace Admin\Controller;
	use \Core\AdminController;

	class FilmController extends AdminController{

		function doList(){

			$k = isset($_GET['k'])? $_GET['k'] : "";
			// echo __CLASS__;
			$FilmModel = new \Model\FilmModel;
			$arr = $FilmModel->pageList($k);
			// var_dump($arr);

			$this->assign("FilmArr",$arr);
			$this->display("list.html");
		}



		function addType(){


			$FilmModel = new \Model\FilmModel;
			$arr = $FilmModel->findAll();

			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);
				$len = count($a1);

				$str ="";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}
			$this->assign("dateArr",$arr);
			$this->display("add.html");
		}

		function add(){
			$type = $_POST['type'];

			if($type=='0'){

				$data[':pid'] = 0;
				$data[':path'] = 0;

			}else{
				$arr = explode("#",$type);
				var_dump($arr);
				$data[':pid'] = $arr[0];
				$data[':path'] = $arr[1]."-".$arr[0];
				
			}

			$data[":tname"] = $_POST['typename'];

			$FilmModel = new \Model\FilmModel;
			if($FilmModel->addInfo($data)){
				$this->success("Admin","Filmtype","doList","添加{$data[":tname"]}类型成功",1);
			}else{
				$this->error("Admin","Filmtype","addType","添加{$data[":tname"]}类型失败",1);
			}
		}

		function deleteType(){

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];
			$FilmModel = new \Model\FilmModel;

			if($FilmModel->delete($id)){
				$this->success("Admin","Filmtype","doList","删除成功",1);
			}else{
				$this->error("Admin","Filmtype","deleteType","删除失败",1);
			}
		}

	}



 ?>