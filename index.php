<?php

// Подключаем контроллер по имени класса
function __autoload($classname) {
    require_once("include/$classname.php");
}

// обрабатываем чистые ссылки
$arr = array();
if (isset($_GET['q']))
    $arr = explode('/', $_GET['q']);

$params = array();

foreach($arr as $value)
{
    if ($value != '')
        $params[] = $value;
}

// Запрашиваем действие у контроллера
$action = "action_";
$action .= isset($params[0])?$params[0]:"index";

$controller = new C_Page();
$controller->request($action);
