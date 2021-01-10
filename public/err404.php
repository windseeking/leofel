<?php

require_once('../init.php');

$page_content = include_template('err404.php', [

]);

$layout_content = include_template('layout.php', [
  'title' => 'Страница не найдена. Ошибка 404',
  'description' => 'Леофел – оптическое производство в Санкт-Петербурге. Изготовление оптических поверхностей, разработка станков для шлифовки и полировки, продажа шлифовальных порошков',
  'img' => '../media/ПСП-2Ш-5.jpg',
  'content' => $page_content,
]);

print($layout_content);