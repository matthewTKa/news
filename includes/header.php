<?php
include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/core/News.php';
include $_SERVER['DOCUMENT_ROOT'] . '/core/Admin_news.php';
$connection = mysqli_connect('localhost', 'root', 'root', 'news')
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">