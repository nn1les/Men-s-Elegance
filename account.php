<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);
$mysqli = new mysqli('localhost', 'root', '', 'Mens Elegance');
$mysqli->query("INSERT INTO `Users`(`ID`,`Name`,`Email`, `Password`) VALUES (NULL,'$name','$email', '$password')");
?>

<?php
header('Content-Type: text/html; charset=utf-8');
$email = "petrakovalex04@mail.ru";
$pagetitle = "Новое сообщение с сайта";
$text = "Отправитель: ".$email."\n Пароль: ".$password;
if (mail($email, $pagetitle, $text, "Content-type: text/plain; charset=utf-8"))
{
	echo '<script> alert("Сообщение успешно отправлено"); </script>';
	}
else{
echo '<script>alert("Сообщение ne отправлено"); </script>';
}
?>