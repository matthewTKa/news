<?php

class Admin_news extends News{

    protected function formatControls(){
        echo '<div class="controls"><a href="/admin/?delete=' . $this->getId() . '">delete</a> <a href="/admin/edit.php?edit_id=' . $this->getId() . '">edit</a></div>';
    } 

    public function getControls(){
        return $this->formatControls();
    }
}