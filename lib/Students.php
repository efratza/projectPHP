<?php

class Students implements ISavable{

	private static $tableName = 'students';

		public $id;
		public $name;
		public $phone;
		public $email;
		public $image;

	function __construct($id, $name, $phone, $email, $image) {
		// parent::__construct ($name, $phone, $email, $image);

		$this->id = $id;
		$this->name = $name;
		$this->phone = $phone;
		$this->email= $email;
		$this->image = $image;
	}

	public function save() {
		$stmt = DB::getInstance()->getConnection()->prepare("INSERT INTO $this->tableName (name, phone, email, image) VALUES (?, ?, ?, ?)");
		$stmt->bind_param('siss', $this->name, $this->$phone, $this->$email, $this->image); 

		$stmt->execute();
				
	}

	public function edit() {
		$stmt =DB::getInstance()->getConnection()->prepare("UPDATE " . self::$tableName . " SET name=?, phone=?, email=?, image=? where id = ?");
		$stmt->bind_param('sissi', $this->name, $this->phone, $this->email, $this->image, $this->id);

		$stmt->execute();
	}

	public function delete() { 
        $stmt = DB::getInstance()->getConnection()->prepare("DELETE FROM " . self::$tableName . " where id = ?");
        $stmt->bind_param('i', $this->id);

        $stmt->execute();
    }

	private static function selectAll() {
		$result = DB::getInstance()->getConnection()->query("SELECT * FROM " . self::$tableName . " limit 1000");
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			$rows []= new self( $row['id'],$row ['name'], $row['phone'], $row['email'], $row['image']);
		}
		return $rows;
	}

	public static function printlist() {
		$rows = self::selectAll();
          $html  = '';
		for ($i=0, $count = count($rows); $i < $count; $i++) { 
			$html .="<a href=?page=students&action=edit&id={$rows[$i]->id}>";
			$html .= "<img src = 'img/students images/{$rows[$i]->image}'>";
			$html .= "<span>{$rows[$i]->name}</span>";
			$html .= "<span>{$rows[$i]->phone}</span>";
			// $html .= "<span>{$rows[$i]->email}</span>";
			$html .= '</a>';
		}
		return $html;
	}
}

