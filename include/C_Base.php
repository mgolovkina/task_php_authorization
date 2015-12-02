<?php

include_once('include/M_Users.php');
include_once('include/M_Poems.php');

//
// Контроллер
//
abstract class C_Base extends C_Controller{
	protected $title;
	protected $content;
	protected $users;
	protected $poems;

	function __construct(){

	}

	// Инициализация параметров
	protected function before(){
        session_start();

        $this->title = "MyTitle";
        $this->content = "MyContent";

        $this->users = M_Users::Instance();
		$this->users->ClearSessions();

		$this->poems = M_Poems::Instance();
	}

	// Отображение страницы в браузере
	public function render(){
		$params = array("title"=>$this->title, "content"=>$this->content);
		$page = $this->template("views/main.php", $params);

		header("Content-type: text/html; charset=utf-8");
		echo $page;
	}
}