<?php


class database{
    private $Books = [];
    public $filepath = '..\DB\database.txt';


    public function __construct(){
        $this->getData();
    }

    private function getData(){
        if(file_exists($this->filepath)){
            $content = file_get_contents(this->filepath);
            $data = unserialize($content);
             $this->Books = $data->Books;
        }
    }

    private function setData(){
        $data = serialize($this);
        file_put_contents($this->filepath,$data);
    }

    public function saveData(){
        $this->saveData();
    }
}





