<?php 
	namespace Model;
	use \Core\Model;

	class FilmtypeModel extends Model{
		public $table = "film_type";

		function findAll(){
			
			$sql = "select *,concat(path,'-',id) dpath from ".$this->getTableName()." order by dpath";
			return $this->getAll($sql,$data=[]);
		}

		function addInfo($data){
			$sql = "insert into ".$this->getTableName()." values(null,:tname,:pid,:path)";
			return $this->exec($sql,$data);
		}

		function delete($id){

			$sql = "delete from ".$this->getTableName()." where id=:id";
			$data[':id'] = $id;
			return $this->exec($sql,$data);
		}

		function getAllSubTypes($pid){
			$sql = "select * from ".$this->getTableName()." where pid = :types order by level,id";
			$data[':types']= $pid;
			// var_dump($data);
			return $this->getAll($sql,$data);
		}

		
		
	}


 ?>