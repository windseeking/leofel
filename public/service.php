<?php

require_once('../init.php');

$page_content = include_template('service.php', [

]);

$layout_content = include_template('layout.php', [
  'content' => $page_content,
  'subtitle' => 'Услуги',
]);

print($layout_content);
