<?php

class Admin implements ISavable{
	private static $tableName = 'admins';

	public $id;
	public $name;
	public $role;
	public $phone;
	public $email;
	public $image;
	public $password;

	function __construct($id, $name, $role, $phone, $email, $image, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
        $this->phone = $phone;
        $this->email = $email;
        $this->image = $image;
        $this->password = $password;
        
        
    }

		function save() {
		$stmt = DB::getInstance()->getConnection()->prepare("INSERT INTO $this->tableName (name, role, phone, email, image, password) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bind_param('siisss', $this->name, $this->$role, $this->$phone, $this->$email, $this->image, $this->password); 

		$stmt->execute();
				
	}

	function edit() {
		$stmt =DB::getInstance()->getConnection()->prepare("UPDATE $this->tableName SET name=?, role=?, phone=?, email=?, image=?, password=? where id = ?");
		$stmt->bind_param('siisss', $this->name, $this->$role, $this->$phone, $this->$email, $this->image, $this->password, $this->id);

		$stmt->execute();
	}

	public function delete() { 
        $stmt = DB::getInstance()->getConnection()->prepare("DELETE FROM $this->tableName where id = ?");
        $stmt->bind_param('i', $this->id);

        $stmt->execute();
    }

	private static function selectAll() {
		$result = DB::getInstance()->getConnection()->query("SELECT * FROM admins limit 1000");
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			if (!$result) {
    throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
}
			$rows []= new self( $row['id'],$row ['name'],  $row['role'], $row['phone'], $row['email'], $row['image'], $row['password']);
		}
		return $rows;
	}

	public static function printlist() {
		$rows = self::selectAll();
          $html  = '';
		for ($i=0, $count = count($rows); $i < $count; $i++) { 
			$html .="<a href=?page=admins&action=edit&id={$rows[$i]->id}>";
			$html .= "<img src = 'img/admins images/{$rows[$i]->image}'>";
			$html .= "<span>{$rows[$i]->name}</span>";
			$html .= "<span>{$rows[$i]->phone}</span>";
			// $html .= "<span>{$rows[$i]->email}</span>";
			$html .= '</a>';
		}
		return $html;
	}
}
