<?php 
	namespace Model;
	use \Core\Model;

	class RulesModel extends Model{
		public $table = "rules";

		function findAll(){
		
			$sql = "select *,concat(path,'-',id) dpath from ".$this->getTableName()." order by dpath";
			return $this->getAll($sql,$data=[]);
		}

		function addInfo($data){
			$sql = "insert into ".$this->getTableName()." values(null,:rname,:rdesc,:url,:filmtypeid,:content,:type,:start,:end,:pid,:path)";

			return $this->exec($sql,$data);
		}

		function updataInfo($data){
			$sql = "update ".$this->getTableName()." set rules_name=:rname,rules_desc=:rdesc,url=:url,content=:content,type=:type,filmtypeid=:filmtypeid,start_page=:start,end_page=:end,pid=:pid,path=:path where id = :id";

			return $this->exec($sql,$data);
		}

		function delete($id){

			$sql = "delete from ".$this->getTableName()." where id=:id";
			$data[':id'] = $id;
			return $this->exec($sql,$data);
		}

		function findRowById($id){
			$sql = "select * from ".$this->getTableName()." where id=:id";
			$data[":id"]=$id;
			return $this->getRow($sql,$data);
		}
		
	}


 ?>