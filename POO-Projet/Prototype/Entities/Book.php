<?php

// class Book
// {
//   private $id;
//   private $ISBN;
//   private $title;

//   public function __construct($ISBN, $title)
//   {
//     $this->id = time();
//     $this->ISBN = $ISBN;
//     $this->title = $title;
//   }

//   public function getId()
//   {
//     return $this->id;
//   }

//   public function setId($id)
//   {
//     $this->id = $id;
//   }

//   public function getISBN()
//   {
//     return $this->ISBN;
//   }

//   public function setISBN($ISBN)
//   {
//     $this->ISBN = $ISBN;
//   }

//   public function getTitle()
//   {
//     return $this->title;
//   }

//   public function setTitle($title)
//   {
//     $this->title = $title;
//   }
// }



class Book {
    private $id;
    private $title;
    private $author;
    private $ISBN;

    public function __construct(){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->ISBN = $ISBN;
    }
    
    //get and set function id

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id= $id;
    }

        //get and set function title

    public function getTitle(){
        return $this->title; 
    }
    public function setTitle($title){
        $this->title = $title;
    }

        //get and set function Author

    public function getAuthor(){
        return $this->authors;
    }

    public function setAuthor($author){
        $this->author = $author;
    }
        //get and set function ISBN

    public function getISBN(){
        return $this->ISBN;
    }
    public function setISBN($ISBN){
        $this->ISBN = $ISBN;
    }
    









}



?>