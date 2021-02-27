<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
if($_GET['delete']){
    mysqli_query($connection, 'DELETE FROM news_table where id_news = ' . $_GET['delete']);
    echo '<script>alert("Новость удалена");</script>';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Админ</title>
</head>
<body>
    <a href="/admin/addNews.php">Новая новость</a>
    <br>
    <h1>Админ</h1>
    <?php
    $result = mysqli_query($connection, 'SELECT * FROM news_table');
    foreach($row = mysqli_fetch_all($result) as $el):?>
        <div class="row">
            <div class="title">
                <h3>
                <a href="#"><?= $el[1]; ?></a>
                </h3>    
            </div>
            <div class="text">
                <p> <?= cutString($el[2], 175); ?> </p>
            </div>
            <div class="author">
                <span>Подпись автора: <a href="#"><i><?= $el[3]; ?></i></a></span>
            </div>
            <div class="controls">
            <a href="/admin/?delete=<?=$el[0];?>">delete</a> <a href="/admin/edit.php?edit_id=<?= $el[0]; ?>">edit</a>
            </div>
        </div>
        <?php endforeach; ?>

</body>
</html>