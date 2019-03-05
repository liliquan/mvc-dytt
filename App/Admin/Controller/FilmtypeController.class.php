<?php 
	
	namespace Admin\Controller;
	use \Core\AdminController;

	class FilmtypeController extends AdminController{

		function doList(){

			// echo __CLASS__;
			$FilmtypeModel = new \Model\FilmtypeModel;
			$arr = $FilmtypeModel->findAll();
			// var_dump($arr);
			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);
				// var_dump($a1);
				$len = count($a1);

				$str = "";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}



			$this->assign("dateArr",$arr);
			$this->display("list.html");
		}

		function addType(){


			$FilmtypeModel = new \Model\FilmtypeModel;
			$arr = $FilmtypeModel->findAll();

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

			$FilmtypeModel = new \Model\FilmtypeModel;
			if($FilmtypeModel->addInfo($data)){
				$this->success("Admin","Filmtype","doList","添加{$data[":tname"]}类型成功",1);
			}else{
				$this->error("Admin","Filmtype","add","添加{$data[":tname"]}类型失败",1);
			}
		}

		function deleteType(){

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];
			$FilmtypeModel = new \Model\FilmtypeModel;

			if($FilmtypeModel->delete($id)){
				$this->success("Admin","Filmtype","doList","删除成功",1);
			}else{
				$this->error("Admin","Filmtype","deleteType","删除失败",1);
			}
		}

	}



 ?>