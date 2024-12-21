<?php

class User extends Model  {
	private $id;
	private $username, $email , $password;

	public function __construct($id = null, $username = null, $email = null, $password = null) {

		$this->id = $id;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
	
	}
	public static function initUser() {
		self::createTable('
			 id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL'
	);
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

}