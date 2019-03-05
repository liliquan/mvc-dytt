<?php 
	
	namespace Admin\Controller;
	use \Core\AdminController;

	class RulesController extends AdminController{

		function doList(){

			// echo __CLASS__;
			$RulesModel = new \Model\RulesModel;
			$arr = $RulesModel->findAll();
			// var_dump($arr);
			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);
				// var_dump($a1);
				$len = count($a1);

				$str = "";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr[$i]['rules_name'] = $str."|".$arr[$i]['rules_name'];
			}



			$this->assign("dateArr",$arr);
			$this->display("list.html");
		}

		function addType(){


			$RulesModel = new \Model\RulesModel;
			$arr = $RulesModel->findAll();

			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);
				$len = count($a1);

				$str ="";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr[$i]['rules_name'] = $str."|".$arr[$i]['rules_name'];
			}
			$this->assign("dateArr",$arr);

			$FilmtypeModel = new \Model\FilmtypeModel;
			$arr2 = $FilmtypeModel->findAll();

			for($i=0;$i<count($arr2);$i++){

				$a1 = explode("-",$arr2[$i]['path']);
				$len = count($a1);

				$str ="";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr2[$i]['name'] = $str."|".$arr2[$i]['name'];
			}
			$this->assign("filmtypes",$arr2);

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
			
			$data[":rname"] = $_POST['rulesname'];
			$data[":rdesc"] = $_POST['rulesdesc'];
			$data[":url"] = $_POST['url'];
			$data[":start"] = $_POST['start'];
			$data[":end"] = $_POST['end'];
			$data[":type"] = $_POST['rulestype'];
			$data[":content"] = $_POST['content'];
			$data[":filmtypeid"] = $_POST['filmtypeid'];

			$RulesModel = new \Model\RulesModel;
			if($RulesModel->addInfo($data)){
				$this->success("Admin","Rules","doList","添加{$data[":rname"]}类型成功",50);
			}else{
				$this->error("Admin","Rules","add","添加{$data[":rname"]}类型失败",50);
			}
		}

		function deleteType(){

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];
			$RulesModel = new \Model\RulesModel;

			if($RulesModel->delete($id)){
				$this->success("Admin","Rules","doList","删除成功",100);
			}else{
				$this->error("Admin","Rules","deleteType","删除失败",100);
			}
		}


		function doUpdateBefore(){
			if(!isset($_GET['id'])) exit;
			$id = $_GET['id'];

			// echo __CLASS__;
			$RulesModel = new \Model\RulesModel;
			$arr = $RulesModel->findAll();
			// var_dump($arr);
			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);
				// var_dump($a1);
				$len = count($a1);

				$str = "";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr[$i]['rules_name'] = $str."|".$arr[$i]['rules_name'];
			}

			$rules = $RulesModel->findRowByid($id);

			$this->assign("rules",$rules);
			$this->assign("dateArr",$arr);


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
			$this->assign("filmtypes",$arr);

			$this->display("edit.html");
		}

		function doUpdata(){
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

			$data[":rname"] = $_POST['rulesname'];
			$data[":rdesc"] = $_POST['rulesdesc'];
			$data[":url"] = $_POST['url'];
			$data[":start"] = $_POST['start'];
			$data[":end"] = $_POST['end'];
			$data[":type"] = $_POST['rulestype'];
			$data[":content"] = $_POST['content'];
			$data[":filmtypeid"] = $_POST['filmtypeid'];
			$data[":id"] = $_POST['id'];


			$RulesModel = new \Model\RulesModel;
			if($RulesModel->updataInfo($data)){
				$this->success("Admin","Rules","doList","添加{$data[":rname"]}类型修改成功",50);
			}else{
				$this->error("Admin","Rules","doUpdata","添加{$data[":rname"]}类型失败",50);
			}
		}

	}



 ?>