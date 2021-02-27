<?php

class News{

    private $id;
    private $head;
    private $body;
    private $author;

    public function __construct($id, $head, $body, $author)
    {
        $this->id = $id;
        $this->head = $head;
        $this->body = $body;
        $this->author = $author;
    }

    protected function formatHead(){
            echo '<div class="title"><h3><a href="news.php?news_id=' . $this->id . '">' . $this->head . '</a></h3></div>';
    }

    protected function formatBody(){
        $body = cutString($this->body, 175);
        echo '<div class="text"><p>' . $body . '</p></div>';
    }
    
    protected function formatAuthor(){
        echo '<div class="author"><span>Подпись автора: <a href="#"><i>' . $this->author . '</i></a></span></div>';
    }

    public function getId() : int{
        return $this->id;

    }

    public function getHead(){
        $this->formatHead();
    }

    public function getBody(){
        $this->formatBody();
    }

    public function getAuthor(){
        $this->formatAuthor();
    }


}