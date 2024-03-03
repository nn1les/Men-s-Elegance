<?php
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$mysqli = new mysqli('localhost', 'root', '', 'Mens Elegance');
$mysqli->query("INSERT INTO `Soob`(`ID`,`Name`,`Email`, `Text`) VALUES (NULL,'$name','$email', '$text')");
?>

<?php
header('Content-Type: text/html; charset=utf-8');
$email = "petrakovalex04@mail.ru";
$pagetitle = "Новое сообщение с сайта";
$text = "Отправитель: ".$email."\n Текст: ".$text;
if (mail($email, $pagetitle, $text, "Content-type: text/plain; charset=utf-8"))
{
	echo '<script> alert("Сообщение успешно отправлено"); </script>';
	}
else{
echo '<script>alert("Сообщение ne отправлено"); </script>';
}
?>