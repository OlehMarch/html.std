<?php
$result = mail ("test@test.ru","Анкета с сайта","Имя: $_POST[name] Пароль: \n$_POST[password] \nЛюбит ли спать: $_POST[time] \nСколько часов в день спит: $_POST[sleep] \nСвои нароботки в экономии времени: $_POST[text]");
if ($result) {
echo "<p>Сообщение отправлено успешно!</p>";
}
else {
echo "<p>Сообщение НЕ отправлено!</p>";
}
?>