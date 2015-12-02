<?php

//
// Контроллер
//
class C_Page extends C_Base{
	function __construct(){
		parent::__construct();
	}

	// Выполнение перехода на основную страницу
	public function action_index(){

        // Проверяем авторизован ли пользователь
		$user = $this->users->Get();
		if ($user == null)
		{
			header("Location: login");
			die();
		}

        // Проверяем запрос на добавление нового стихотворения
		if($this->isPost()){
			$result = $this->poems->Add($_POST['title'], $_POST['author'], $_POST['text']);
			if (!$result)
				die("ERROR!!!");

			header("Location: /");
			die();
		}

        // Запрашиваем весь список стихотворений
        $poems = $this->poems->GetAll();

		$this->title = "Сборник стихотворений";
		$this->content = $this->template("views/collection.php", array("poems"=>$poems));
	}

	// Выполнение авторизации
	public function action_login(){
        $this->users->Logout();
        $error = '';

        // Проверяем запрос авторизации
		if($this->isPost()){
            if ($this->users->Login($_POST['login'],
                                    $_POST['password'],
                                    isset($_POST['remember'])
                                    ))
            {
                header('Location: /');
                die();
            }
            $error = "Ошибка: некорректный логин или пароль";
		}

		$this->title = "Авторизация";
		$this->content = $this->template("views/login.php", array("msg"=>$error));
	}
}