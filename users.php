<?php
include ('db.php');
class users extends db{

	public function getUsers($keyword){
		if ($keyword) {
			$spl = 'SELECT * FROM users WHERE username LIKE "%'.$keyword.'%"';
		}
		else {
			$sql = 'SELECT * FROM users';
		}
		$users =$this->select($sql);
		return $users;
	}
	public function delete($params){
		$sql = '.....cau sql.....';
		$this->query($sql);
	}
	public function insert($params){
		$sql = '.....cau sql.....';
		$this->query($sql);
	}
	public function update($params){
		$sql = '.....cau sql.....';
		$this->query($sql);
	}
}
?>

