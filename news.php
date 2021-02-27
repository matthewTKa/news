<?php
if(isset($_GET['news_id'])):
    $id = $_GET['news_id'];
    
    $connect = mysqli_connect('localhost','root','root','news');
    $query = 'SELECT * FROM news_table where id_news = ' . $id;

    $result = mysqli_fetch_assoc(mysqli_query($connect,$query));
    ?>
    <div class="news" style="margin: 5% auto; width: 50%;">
    <h1><?= $result['title_news'] ?></h1>
    <p style="font-size: 20px; width: 500px;"><?= $result['body_news'] ?></p>
    <br>
    <span style="font-style: italic;"><?= $result['author_news'] ?></span>
    </div>
<?php endif; ?>
    
    