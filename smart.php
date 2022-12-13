<!-- // Код для отправки форм на почту пользователя -->
<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "marya.inutina@yandex.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	// Этот блок отвечает за отображение надписей в самом сообщении уже на почте
	$msg="
    Имя: $name
    Фамилия: $surname
    Телефон: $phone
    Почта: $email";
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Заявка отправлена!</p>
