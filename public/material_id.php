<?php

require_once('../init.php');

$header = 'Материалы';

$page_content = include_template('material_id.php', [
  'header' => $header,
]);

$layout_content = include_template('layout.php', [
  'title' => $header,
  'description' => '',
  'keywords' => '',
  'content' => $page_content,
]);

print($layout_content);
