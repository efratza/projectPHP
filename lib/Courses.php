<?php

class Courses implements ISavable{

	public $id;
	public $name;
	public $description;
	public $image;

	function __construct($id, $name, $description, $image) {
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->image = $image;
	}

	// public function getgetConnectionion() {
	// 	if (empty(static::$conn)) {
	// 		return static::$conn = new mysqli('localhost', 'root', '', 'school');
	// 	} else {
	// 		return static::$conn;
	// 	}
		
	
	// 	public function getConnection() {
	// 	$this->conn = new mysqli('localhost', 'root', '', 'school');
	// 	if ($this->conn->errno) {
	// 		echo $this->conn->error;
	// 		die();
	// 	}
	// }

	function save() {
		//$stmt = $conn->prepare("INSERT INTO courses (name, description, image) VALUES (?, ?, ?)");
		$stmt = DB::getInstance()->getConnection()->prepare("INSERT INTO courses (name, description, image) VALUES (?, ?, ?)");
		$stmt->bind_param('sss', $this->name, $this->description, $this->image); 

		$stmt->execute();
				
	}

	function edit() {
		$stmt =DB::getInstance()->getConnection()->prepare("UPDATE courses SET name=?, description=?, image=? where id = ?");
		$stmt->bind_param('sssi', $this->name, $this->description, $this->image, $this->id);

		$stmt->execute();
	}

	public function delete() { 
        $stmt = DB::getInstance()->getConnection()->prepare("DELETE FROM  courses  where id = ?");
        $stmt->bind_param('i', $this->id);

        $stmt->execute();
    }

	private static function selectAll() {
		$result = DB::getInstance()->getConnection()->query("SELECT * FROM courses limit 1000");
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			$rows []= new self( $row['id'],$row ['name'], $row['description'], $row['image']);
		}
		return $rows;
	}

	public static function printlist(){
		$rows = self::selectAll();
          $html  = '';
		for ($i=0, $count = count($rows); $i < $count; $i++) { 
			$html .="<a class='itemCourses' >";
//                                . "href=?page=courses&action=edit&id={$rows[$i]->id}>";
			$html .= "<img src = 'img/courses images/{$rows[$i]->image}'>";
			$html .= "<span>{$rows[$i]->name}</span>";
			// $html .= "<span>{$rows[$i]->description}</span>";
			$html .= '</a>';
		}
		return $html;
	}
}
