<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

if($_GET['delete']){
    mysqli_query($connection, 'DELETE FROM news_p where id_news = ' . $_GET['delete']);
    echo '<script>alert("Новость удалена");</script>';
}

?>
    <link rel="stylesheet" href="/main.css">
    <title>Админ</title>
</head>
<body>
    <a href="/admin/addNews.php">Новая новость</a>
    <br>
    <h1>Админ</h1>
    <?php
    $result = mysqli_query($connection, 'SELECT * FROM news_p');
    foreach($row = mysqli_fetch_all($result) as $el):
        $admin_new = new Admin_news($el[0],$el[1],$el[2],$el[3]);?>
        <div class="row">
            <?php
            
            $admin_new->getHead();
            $admin_new->getBody();
            $admin_new->getAuthor();
            $admin_new->getControls();


            ?>
        </div>
        <?php endforeach; ?>

</body>
</html>