<?php

class Book{
    private $title;
    private $availableCopies;  
     
    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
    function borrowBook(){        
            if($this->availableCopies>0){
            $this->availableCopies--;
            return true;
        }else{
            return false;
    }           
    }   
    function returnBook(){        
        $this->availableCopies++;       
    }
}

class Member{
    private $name;
    public function __construct($name){
        $this->name = $name;
    } 

    public function getName(){
        return$this->name;
    }
    public function borrowBook(Book $book){
        if($book->borrowBook()){
            return $this->name. "borrowed".$book->getTitle()."<br/>";
        }else{
            return "Sorry".$book->getTitle()."is not available.";
        }       
    }   
    public function returnBook(Book $book){
        $book->returnBook();
        echo $this->name."returned". $book->getTitle(). "<br/>";        
    }  
 }

$book1 = New Book('The Great Gatsby', 5);
$book2 = New Book("To Kill a Mockingbird", 3);

$member1 = New member('John Doe');
$member2 = New member('Jane Smith');

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Available Copies of  ' ".$book1->getTitle()."': ".$book1->getAvailableCopies()."<br/>";
echo "Available Copies of  ' ".$book2->getTitle()."': ".$book2->getAvailableCopies()."<br/>";

