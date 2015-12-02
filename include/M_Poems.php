<?php
require_once("include/M_MYSQL.php");

//
// Модуль управления списком стихов
//
class M_Poems
{
    private static $instance;	// экземпляр класса
    private $link;				// драйвер БД

    //
    // Получение экземпляра класса
    // результат	- экземпляр класса M_Poems
    //
    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Poems();

        return self::$instance;
    }

    //
    // Конструктор
    //
    public function __construct()
    {
        $this->link = M_MYSQL::GetInstance();
    }

    //
    // Добавление нового стихотворения в базу
    // $title 	- название
    // $author 	- автор
    // $text 	- текст стихотворения
    // результат - ID новой записи
    //
    public function Add($title, $author, $text)
    {
        // Формирует массив полей таблицы 'poems'
        $params = array();
        $params['title'] = trim($title);
        $params['author'] = trim($author);
        $params['text'] = trim($text);

        return M_MYSQL::GetInstance()->Insert('poems', $params);
    }

    //
    // Получения списка всех стихотворений из базы
    //
    public function GetAll()
    {
        return M_MYSQL::GetInstance()->Select("SELECT * FROM poems ORDER BY id DESC");
    }
}