<?php

namespace admin;
          
class user {
	
	public function index() {
		global $db;
		$users = $db->exec("select * from user");
		var_dump($users);
		echo \View::instance()->render("admin/user-index.html");
	}
	
	public function login() {
		if (isset($_POST['submit'])) {
			
		}
		require 'app/view/admin/login.html';
	}
}