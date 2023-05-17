<?php
namespace application\model;

class UserModel extends Model{
	public function getUser($arrUserInfo, $pwFlg = true) {
		$sql =" select * from user_info where u_id = :id ";

		// PW 추가할 경우
		if($pwFlg) {
			$sql .= " and u_pw = :pw ";
		}

		$prepare = [
			":id" => $arrUserInfo["id"]
		];
		
		// PW 추가할 경우
		if($pwFlg) {
			$prepare[":pw"] = base64_encode($arrUserInfo["pw"]);
		}
		
		try {
			$stmt = $this->conn->prepare($sql);
			$stmt->execute($prepare);
			$result = $stmt->fetchAll();
		} catch (Exception $e) {
			echo "UserModel->getUser Error : ".$e->getMessage();
			exit();
		}

		return $result;
	}

	// Insert User
	public function insertUser($arrUserInfo) {
		$sql = " INSERT INTO user_info(u_id, u_pw, u_name) VALUES(:u_id, :u_pw, :u_name) ";

		$prepare = [
			":u_id" => $arrUserInfo["id"]
			, ":u_pw" => base64_encode($arrUserInfo["pw"])
			, ":u_name" => $arrUserInfo["name"]
		];

		try {
			$stmt = $this->conn->prepare($sql);
			$result = $stmt->execute($prepare);
			return $result;
		} catch (Exception $e) {
			return false;
		}
	}
}