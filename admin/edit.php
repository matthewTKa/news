<?php
$connect = mysqli_connect('localhost', 'root', 'root','news');

if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $data = 'SELECT * FROM news_table where id_news = ' . $id;
    $result = mysqli_fetch_assoc(mysqli_query($connect,$data));
    
    if(isset($_POST['edit'])){
        $title = $_POST['title'];
        $body = $_POST['body'];
        $author = $_POST['author'];
        $query = 'UPDATE news_table SET title_news = "' . $title . '", body_news = "' . $body . '", author_news = "' . $author . '" where id_news = ' . $id;  ;
        mysqli_query($connect,$query);
        echo '<script>alert("Изменения внесены");</script>';
        exit("<meta http-equiv='refresh' content='0; url= /index.php'>");
    }
}
?>
<form action="" method="post">
<span>Заголовок</span>
<br>
<input type="text" name="title" value="<?= $result['title_news'];?>" style="width: 200px; height: 70px;">
<br>
<span>Текст</span>
<br>
<input type="text" name="body" value="<?= $result['body_news'];?>" style="width: 400px; height: 120px;">
<br>
<span>Автор</span>
<br>
<input type="text" name="author" value="<?= $result['author_news'];?>">
<br><br>
<input type="submit" value="Изменить" name="edit">

</form>
