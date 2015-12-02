<?php

require_once("config.php");

//
// Модуль управления БД
//

class M_MYSQL{

	private static $instance;   // экземпляр класса
	private $link;              // объект БД - MySQLi

    //
    // Конструктор
    //
	private function __construct(){
        // Устанавливаем кодировку
		setlocale(LC_ALL, "ru_RU.UTF-8");
		mb_internal_encoding("UTF-8");

		// Соединяемся с БД
		$this->link = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if ($this->link->connect_error) {
			die("mysqli: " . $this->link->connect_error);
		}
        // Устанавливаем кодировку БД
		$this->link->query("SET NAMES utf8");
	}

    //
    // Деструктор
    //
	public function __destruct(){
        // Закрываем соединение с БД
        $this->link->close();
	}

    //
    // Получение экземпляра класса
    // результат	- экземпляр класса M_MYSQL
    //
	public static function GetInstance(){
		if(self::$instance == null)
			self::$instance = new M_MYSQL();

		return self::$instance;
	}

    //
    // Выборка из БД
    // $query 	- запрос
    // результат - массив кортежей
    //
	public function Select($query){
		$result = $this->link->query($query);
		if(!$result)
			die($this->link->error);

		$rows = array();
        while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}

    //
    // Вставка нового элемента
    // $table 	- таблица
    // $fields 	- список полей таблицы и их значения
    // результат - ID элемента
    //
	public function Insert($table, $fields){
		$columns = array();     // список полей
		$values = array();      // значения полей

		$table = $this->link->real_escape_string($table);
		foreach ($fields as $field => $value) {
			$field = $this->link->real_escape_string($field);

			$columns[] = $field;
			if($value == null){
				$values[] = "NULL";
			}else{
				$value = $this->link->real_escape_string($value);
				$values[] = "'$value'";
			}
		}

		$columns_str = implode(",", $columns);
		$values_str = implode(",", $values);

		$query = "INSERT INTO `$table` ($columns_str) VALUES ($values_str)";
		$result = $this->link->query($query);
		if(!$result)
			die($this->link->error);

		return $this->link->insert_id;
	}

    //
    // Удаление элемента из БД
    // $table 	- таблица
    // $where 	- условие
    // результат - количество удаленных элементов
    //
	public function Delete($table, $where){
		$table = $this->link->real_escape_string($table);
		$query = "DELETE FROM `$table` WHERE $where";
		$result = $this->link->query($query);
		if(!$result)
			die($this->link->error);

		return $this->link->affected_rows;
	}

    //
    // Изменение элементов
    // $table 	- таблица
    // $fields 	- список полей таблицы и их значения
    // $where 	- условие
    // результат - количество измененных элементов
    //
	public function Update($table, $fields, $where){
		$sets = array();    // набор поле=значение

		$table = $this->link->real_escape_string($table);
		foreach ($fields as $field => $value) {
			$field = $this->link->real_escape_string($field);
			if($value == null)
			{
				$sets[] = "$field=NULL";
			}else{
				$value = $this->link->real_escape_string($value);
				$sets[] = "$field='$value'";
			}
		}

		$sets_str = implode(",", $sets);
		$query = "UPDATE `$table` SET $sets_str WHERE $where";
		$result = $this->link->query($query);
		if(!$result)
			die($this->link->error);

		return $this->link->affected_rows;
	}

    //
    // Экранирование строки
    // $string 	- строка
    //
	public function EscapeString($string)
	{
		return $this->link->real_escape_string($string);
	}
}


