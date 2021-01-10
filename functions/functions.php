<?php

require_once('mysql_helper.php');

function filter_tags(string $str = null): string
{
  return $str === null ? '' : strip_tags($str);
}

function get_connection(array $database_config)
{
  $con = mysqli_connect($database_config['host'], $database_config['user'], $database_config['password'],
    $database_config['database']);
  if (!$con) {
    die(mysqli_connect_error());
  }
  mysqli_set_charset($con, 'utf8');
  return $con;
}

/**
 * Определяет запрос в зависимости от того, какую страницу открывает пользователь
 * @param $con // Подключение к БД
 * @param $sef_url // Имя, с помощью которого мы определим id
 * @return array
 */
function get_material_by_sef($con, $sef_url)
{
  $sql = "SELECT * FROM materials WHERE sef_url = '$sef_url'";
  if ($res = mysqli_query($con, $sql)) {
    return mysqli_fetch_assoc($res);
  }
  return [];
}

function include_template($name, $data)
{
  $name = 'templates/' . $name;
  $result = '';
  if (!file_exists($name)) {
    return $result;
  }

  ob_start();
  extract($data);
  require $name;

  $result = ob_get_clean();
  return $result;
}

function get_machines(mysqli $con): array
{
  $sql =
    'SELECT * FROM machines';
  $res = mysqli_query($con, $sql);
  return $machines = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_machine_by_id(mysqli $con, int $id): array
{
  $sql = 'SELECT * FROM machines WHERE id = ' . $id;
  $res = mysqli_query($con, $sql);
  if ($res) {
    return mysqli_fetch_assoc($res);
  }
  return [];
}

function get_materials(mysqli $con): array
{
  $sql =
    'SELECT * FROM materials';
  $res = mysqli_query($con, $sql);
  return $materials = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function get_material_by_id(mysqli $con, int $id): array
{
  $sql = 'SELECT * FROM materials WHERE id = ' . $id;
  $res = mysqli_query($con, $sql);
  if ($res) {
    return mysqli_fetch_assoc($res);
  }
  return [];
}
