<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
if(isset($_POST['Add'])){
    var_dump($_POST);

    $header = $_POST['header'];
    $body = $_POST['body'];
    $author = $_POST['author'];

    $query = 'INSERT INTO news_table(title_news,body_news,author_news) VALUES ("' . $header . '","' . $body . '","' . $author . '")';
    var_dump(mysqli_query($connection, $query));
    exit("<meta http-equiv='refresh' content='0; url= /index.php'>");

}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить новую новость</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <span>Заголовок</span>
    <br>
    <input type="text" name="header" id="header">
    <br>
    <span>Текст новости</span>
    <br>
    <input type="text" name="body" id="body" style="width: 300px; height: 150px;">
    <br>
    <br>
    <span>Автор</span>
    <input type="text" name="author" id="author">
    <br>
    <br>
    <input type="submit" value="Добавить" name="Add">
    </form>
</body>
</html>