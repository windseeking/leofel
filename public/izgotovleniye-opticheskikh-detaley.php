<?php

require_once('../init.php');

$page_content = include_template('soon.php', []);

$layout_content = include_template('layout.php', [
  'title' => 'Изготовление оптических делатей',
  'subtitle' => 'Услуги',
  'description' => '',
  'content' => $page_content,
]);

print($layout_content);
