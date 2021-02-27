<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
    <title>Новости</title>
</head>
<body>
<h1>Новости</h1>
    <?php
    $result = mysqli_query($connection, 'SELECT * FROM news_table');
    foreach($row = mysqli_fetch_all($result) as $el):?>
        <div class="row">
            <div class="title">
                <h3>
                <a href="news.php?news_id=<?=$el[0];?>"><?= $el[1]; ?></a>
                </h3>    
            </div>
            <div class="text">
                <p> <?= cutString($el[2], 175); ?> </p>
            </div>
            <div class="author">
                <span>Подпись автора: <a href="#"><i><?= $el[3]; ?></i></a></span>
            </div>
        </div>
        <?php endforeach; ?>

</body>
</html>