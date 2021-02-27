<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
    <title>Новости</title>
</head>
<body>
<h1>Новости</h1>
    <?php
    $result = mysqli_query($connection, 'SELECT * FROM news_p');
    foreach($row = mysqli_fetch_all($result) as $el):?>
        <?php 
        $new = new News($el[0],$el[1],$el[2],$el[3]);
        ?>
        <div class="row">
            <?php
            $new->getHead();
            $new->getBody();
            $new->getAuthor();

            ?>            
        </div>
        <?php endforeach; ?>

</body>
</html>