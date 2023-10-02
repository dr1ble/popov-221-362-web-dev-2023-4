<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ответ на обращение</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $fio = isset($_GET['fio']) ? $_GET['fio'] : '';
    $message = isset($_GET['message']) ? $_GET['message'] : '';
    $source = isset($_GET['source']) ? $_GET['source'] : '';

    echo "<h1>Ответ на ваше обращение:</h1>";
    echo "<p><h2>ФИО:</h2> $fio</p>";
    echo "<p><h2>Текст обращения:</h2> $message</p>";
    echo "<p><h2>Источник:</h2> $source</p></h2>";

    echo '<form action="header.html">';
    echo '<input type="submit" value="Заполнить снова">';
    echo '</form>';
    ?>
</body>
</html>