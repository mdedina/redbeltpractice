<?php

class User extends CI_Model {

	public function create($post)
	{
		$this->db->query(
			"INSERT INTO users (name, alias, email, password, created_at, modified_at) 
			VALUES (?, ?, ?, ?, NOW(), NOW())", 
			array($post['name'], $post['alias'], $post['email'], $post['password']));
	}

	public function retrieve($post)
	{
		return $this->db->query("SELECT * FROM users 
			WHERE email = ? AND password = ?",
			array($post['email'], $post['password']))->result_array();
	}

	public function retrieve_by_email($post)
	{
		return $this->db->query("SELECT * FROM users 
			WHERE email = ?",
			array($post['email']))->result_array();
	}

	public function retrieve_all($post)
	{
		return $this->db->query("SELECT * FROM users ORDER BY id DESC")->result_array();
	}


	public function update($post)
	{

	}

	public function delete($post)
	{

	}

}