<?php

require_once('../init.php');

if (!isset($_GET['tab']) || $_GET['tab'] == 'invoice') {
  $title = 'Реквизиты';
  $doc_content = include_template('_invoice.php', []);
} elseif ($_GET['tab'] == 'terms') {
  $title = 'Пользовательское соглашение';
  $doc_content = include_template('_terms.php', []);
} elseif ($_GET['tab'] == 'privacy') {
  $title = 'Политика обработки персональных данных';
  $doc_content = include_template('_privacy.php', []);
}

$page_content = include_template('documents.php', [
  'title' => $title,
  'document' => $doc_content
]);

$layout_content = include_template('layout.php', [
  'title' => $title,
  'description' => 'Леофел – оптическое производство в Санкт-Петербурге. Изготовление оптических поверхностей, 
                    разработка станков для шлифовки и полировки, продажа шлифовальных порошков',
  'img' => '../media/ПСП-2Ш-5.jpg',
  'content' => $page_content,
]);

print($layout_content);
