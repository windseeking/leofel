<?php

/**
 * Создает подготовленное выражение на основе готового SQL запроса и переданных данных
 *
 * @param $link mysqli Ресурс соединения
 * @param $sql string SQL запрос с плейсхолдерами вместо значений
 * @param array $data Данные для вставки на место плейсхолдеров
 *
 * @return mysqli_stmt Подготовленное выражение
 */
function db_get_prepare_stmt($link, $sql, $data = []) {
  $stmt = mysqli_prepare($link, $sql);

  if ($data) {
    $types = '';
    $stmt_data = [];

    foreach ($data as $value) {
      $type = null;

      if (is_int($value)) {
        $type = 'i';
      }
      else if (is_string($value)) {
        $type = 's';
      }
      else if (is_double($value)) {
        $type = 'd';
      }
      elseif ($value === null) {
        $type = 'd';
      }

      if ($type) {
        $types .= $type;
        $stmt_data[] = $value;
      }
    }

    $values = array_merge([$stmt, $types], $stmt_data);

    $func = 'mysqli_stmt_bind_param';
    $func(...$values);
  }

  return $stmt;
}

function db_fetch_data($con, $sql, $data = []) {
  $result = [];
  $stmt = db_get_prepare_stmt($con, $sql, $data);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  if ($res) {
    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
  }
  mysqli_stmt_close($stmt);
  return $result;
};