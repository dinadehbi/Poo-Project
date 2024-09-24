<?php

require('../DataAccess/DAO.php');

class BookServices {
    public function getBooks(){
        $database = new BookDAO();
        $database-> getBooks();
    }

    public function setBooks($book){
        $bookDAO = new BookDAO();
        $bookDAO->setBook($book);
    }
}

?>