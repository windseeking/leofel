<?php

require_once('../init.php');

$header = 'Услуга';

$page_content = include_template('service_id.php', [
  'header' => $header,
]);

$layout_content = include_template('layout.php', [
  'title' => $header,
  'description' => '',
  'keywords' => '',
  'content' => $page_content,
]);

print($layout_content);
