<?php

require_once('../init.php');

$title = 'Главная';
$write_contact = [];
$write_errors = [];
$call_contact = [];
$call_errors = [];
$write_active = 'active';
$call_active = '';
$write_selected = 'true';
$call_selected = '';
$write_tab = 'show active';
$call_tab = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['write_contact'])) {
  $write_active = 'active';
  $write_selected = 'true';
  $write_tab = 'show active';
  $call_active = '';
  $call_selected = 'false';
  $call_tab = '';

  $write_contact = $_POST['write_contact'];
  $required = ['name', 'email', 'message'];
  foreach ($required as $item) {
    if (empty($write_contact[$item])) {
      $write_errors[$item] = 'Это поле нужно заполнить';
    }
  }

  if (!empty($write_contact['email'])) {
    if (!filter_var($write_contact['email'], FILTER_VALIDATE_EMAIL)) {
      $write_errors['email'] = 'Введите корректный email-адрес';
    }
  }

  if (mb_strlen($write_contact['name']) > 50) {
    $write_errors['name'] = 'Введите имя, не превышающее 50 символов';
  }

  if (mb_strlen($write_contact['email']) > 50) {
    $write_errors['email'] = 'Введите email, не превышающий 50 символов';
  }

  if (mb_strlen($write_contact['message']) > 500) {
    $write_errors['message'] = 'Введите сообщение, не превышающее 500 символов';
  }

  if (empty($write_errors)) {
    $transport = (new Swift_SmtpTransport('', 25))
      ->setUsername('')
      ->setPassword('');
    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Сообщение с leofel.ru'))
      ->setFrom(['' => $write_contact['name']])
      ->setTo(['' => '']);

    $message_content = include_template('email-write.php', [
      'contact_subject' => $title,
      'contact_name' => $write_contact['name'],
      'contact_email' => $write_contact['email'],
      'contact_message' => $write_contact['message']
    ]);

    $message->setBody($message_content, 'text/html');

    try {
      $result = $mailer->send($message);
    } catch (Swift_TransportException $ex) {
      print($ex->getMessage() . '<br>');
    }

    if (!$result) {
      $_SESSION['write-errors'] = 'Сообщение не отправлено по техническим причинам. Вы можете связаться с нами по <a href="mailto:leofel.ru">почте</a>, <a href="tel:+79112729059">позвонить</a> или повторить попытку поздее.';
    } else {
      $_SESSION['write-success'] = 'Сообщение успешно отправлено!';
    }
  } else {
    $_SESSION['write-errors'] = 'Проверьте корректность заполнения полей';
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['call_contact'])) {
  $call_active = 'active';
  $call_selected = 'true';
  $call_tab = 'show active';
  $write_active = '';
  $write_selected = 'false';
  $write_tab = '';

  $call_contact = $_POST['call_contact'];
  $required = ['name', 'phone', 'time'];
  foreach ($required as $item) {
    if (empty($call_contact[$item])) {
      $call_errors[$item] = 'Это поле нужно заполнить';
    }
  }

  if (mb_strlen($call_contact['name']) > 50) {
    $call_errors['name'] = 'Введите имя, не превышающее 50 символов';
  }

  if (mb_strlen($call_contact['time']) > 100) {
    $call_errors['message'] = 'Введите сообщение, не превышающее 100 символов';
  }

  if (empty($call_errors)) {
    $transport = (new Swift_SmtpTransport('s32.webhost1.ru', 25))
      ->setUsername('info@leofel.ru')
      ->setPassword('d2gRccj8A');
    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Заказ звонка с leofel.ru'))
      ->setFrom(['info@leofel.ru' => $call_contact['name']])
      ->setTo(['windseeking2@gmail.com' => 'Инна']);

    $message_content = include_template('email-call.php', [
      'contact_subject' => $title,
      'contact_name' => $call_contact['name'],
      'contact_phone' => $call_contact['phone'],
      'contact_time' => $call_contact['time']
    ]);

    $message->setBody($message_content, 'text/html');

    try {
      $result = $mailer->send($message);
    } catch (Swift_TransportException $ex) {
      print($ex->getMessage() . '<br>');
    }

    if (!$result) {
      $_SESSION['call-errors'] = 'Звонок не заказан по техническим причинам. Вы можете связаться с нами по <a href="mailto:leofel.ru">почте</a>, <a href="tel:+79112729059">позвонить</a> или повторить попытку позднее.';
    } else {
      $_SESSION['call-success'] = 'Звонок успешно заказан!';
    }
  } else {
    $_SESSION['call-errors'] = 'Проверьте корректность заполнения полей';
  }
}

$page_content = include_template('index.php', [
  'machines' => get_machines($con),
  'materials' => get_materials($con),
  'action' => 'index#contact',
  'write_contact' => $write_contact,
  'write_errors' => $write_errors,
  'call_contact' => $call_contact,
  'call_errors' => $call_errors,
  'write_active' => $write_active,
  'call_active' => $call_active,
  'write_selected' => $write_selected,
  'call_selected' => $call_selected,
  'write_tab' => $write_tab,
  'call_tab' => $call_tab,
]);


$layout_content = include_template('layout.php', [
  'title' => $title,
  'description' => 'Леофел – оптическое производство в Санкт-Петербурге. Изготовление оптических поверхностей, 
                    разработка станков для шлифовки и полировки, продажа шлифовальных порошков',
  'img' => '../media/ПСП-2Ш-5.jpg',
  'content' => $page_content,
]);

print($layout_content);
