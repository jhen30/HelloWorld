<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_DefaultTemplate{
	public function action_login(){
		$this->template->content = View::factory('Pages/login');
	}
}