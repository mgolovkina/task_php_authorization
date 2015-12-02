<?php

//
// Контроллер
//
abstract class C_Controller
{
	protected abstract function render();

	protected abstract function before();

	// Выполнение действия
	public function request($action){
		$this->before();
		$this->$action();
		$this->render();
	}

	protected function IsGet(){
		return $_SERVER['REQUEST_METHOD'] == "GET";
	}

	protected function IsPost(){
		return $_SERVER['REQUEST_METHOD'] == "POST";
	}

	// Формирование HTML страницы
	protected function template($file, $params = array()){
		foreach ($params as $k => $v) {
			$$k = $v;
		}

		ob_start();
		include($file);
		return ob_get_clean();
	}

	public function __call($method, $params){
		die("Unknown method");
	}
}

