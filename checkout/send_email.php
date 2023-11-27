<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $phone = $_POST['phone'];
  $cvs = $_POST['cvs'];

  $to = "nmal4ik@gmail.com";
  $subject = "Новый потенциальный клиент";
  $message = "Имя: " . $name . "\n"
           . "Фамилия: " . $surname . "\n"
           . "Номер телефона: " . $phone . "\n" 
           . "cvs: " . $cvs;

  $headers = "From: nmal4ik@gmail.com" . "\r\n" .
             "Reply-To: nmal4ik@gmail.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Спасибо! Ваше сообщение отправлено.";
  } else {
    echo "Ошибка при отправке сообщения.";
  }
}
?>
