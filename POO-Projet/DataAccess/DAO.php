<?php

/*
   require("../DB/DataBase.php");

class BookDAO
{
  public function getBooks()
  {
    $dataBase = new DataBase();
    return $dataBase->Books;
  }

  public function setBook($book)
  {
    $dataBase = new DataBase();
    $dataBase->Books[] = $book;
    $dataBase->saveData();
  }
}

*/ 

require("../DB/database.php");

class BookDAO{
    public function getBooks(){
        $database = new database();
        return $database->Books; 
    }
    public function setBook($book){
        $database = new databse();
        $database->Books[] = $book;
        $database->saveData();
    }
}

?>