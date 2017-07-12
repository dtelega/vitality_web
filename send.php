<?php
//Принимаем почтовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Куда послать письмо
$to="dima.hannasay@gmail.com";
// тема и само сообщение
$subject="Заявка с сайте жалюзи";
$message="
Письмо отправлено из моей формы <br />
Пользователь хочет:".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers="From mysite.com";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
