
<?php

include "./bootstrap.php";
$layout = Layout::get_instance();
$layout->get_static();

$nodel = new Nodel(2);
$nodel = new Nodel(3);
$nodel = new Nodel(4);
// $nodel->description = "test";
// $nodel->name = "product";
// $nodel->price = 2000;
// aa($nodel->test_prop());
// $nodel->save();





/**
 * еще
 * 11 создает запись в бд с заполненнымы колонками, какие колонки заполнены указано в properties (если запись есть то её обновляем)
 * (определяем есть ли модель в базе по свойству loaded)
 * 12 записать модель в базу, получить её id и записать в свойство loaded
 * 13 подумать, возможно метод set нужен для массового задания свойств, а __set для точечного
 * 14 конструктор принимает id записи которую нужно достать из бд, и с которым в дальнейшем будем работать
 * 
 */
?>