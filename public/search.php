<?php

require_once('../init.php');

$search = $_GET['q'] ?? '';

if ($search) {
  $search = mysqli_real_escape_string($con, $_GET['q']) ?? '';
  $db = ['machines', 'materials'];
  foreach ($db as $db_name) {
    $sql = 'SELECT * FROM ' . $db_name . ' WHERE MATCH(title, description) AGAINST(?)';
    $stmt = db_get_prepare_stmt($con, $sql, [$search]);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    if ($db_name == 'machines') {
      $machines = mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    if ($db_name == 'materials') {
      $materials = mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
  }

  $title = '«' . $search . '» – Результаты поиска';
  $page_content = include_template('search.php', [
    'search' => $search,
    'machines' => $machines,
    'materials' => $materials
  ]);
}

$layout_content = include_template('layout.php', [
  'title' => $title,
  'description' => 'Леофел – оптическое производство в Санкт-Петербурге. Изготовление оптических поверхностей, 
                    разработка станков для шлифовки и полировки, продажа шлифовальных порошков',
  'img' => '../media/ПСП-2Ш-5.jpg',
  'content' => $page_content,
  'subtitle' => '',
]);

print($layout_content);
