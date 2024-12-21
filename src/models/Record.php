<?php

class Record extends Model  {
	public $id;
	public $subject, $completedTask;
	public function __construct($id = null, $subject = null, $completedTask = null) {

		$this->id = $id;
		$this->subject = $subject;
		$this->completedTask = $completedTask;

	
	}
	public static function initRecord() {
		self::createTable("
			id INT PRIMARY KEY AUTO_INCREMENT,
			subject VARCHAR(100) NOT NULL,
			completedTask ENUM('Completed', 'Pending')
		");
	}

}