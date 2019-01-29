<?php include "header.html" ?>

        <?php
        
            $age = 90;
            
            class Book{
                var $title;
                var $author;
                var $pages;
                
                function __construct($aTitle, $aAuthor, $aPages){
                   $this->title = $aTitle ;
                   $this->author= $aAuthor;
                   $this->pages = $aPages;
                }
            };
            
            // now that I have the construct I can comment out the book creation and write the code bellow it to create a book
            
            // $book1 = new Book("Alex");
            // $book1->title = "Lord of the Rings";
            // $book1->author = "J. R. R. Tolkien";
            // $book1->pages = 1000;
            
            // $book2 = new Book("Tom");
            // $book2->title = "Harry Potter";
            // $book2->author = "JK Rowling";
            // $book2->pages = 400;
            
            $book1 = new Book("Lord of the Rings", "J. R. R. Tolkien", 1000);
            $book2 = new Book("Harry Potter", "JK Rowling", 400);
            
            echo "$book1->title<br>";
            echo "$book1->author<br>";
            echo "$book1->pages<br>";
            
            echo "$book2->title<br>";
            echo "$book2->author<br>";
            echo "$book2->pages<br>";
        
        ?>
        
        <?php
        
        class Student{
            var $name ;
            var $major ;
            var $gpa;
            
            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
                
            }
            function hasHonors(){
                if($this->gpa >= 3){
                    return "true";
                } else {
                    return "false";
                }
            } 
            
        };
        
        $student1 = new Student("Jim", "Math", 2);
        $student2 = new Student("Mark", "Biology", 4);
        
        echo $student1->hasHonors();
        echo $student2->hasHonors();
        
        
        
        ?>
        
        
        <?php
        
        class Movie{
            public $title;
            private $rating;
            
            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }
            function getRating(){
                return $this->rating;
            }
            // can set a private variable with this function
            function setRating($rating){
                // $this->rating = $rating;
                
                // putting in an if statement to limit the inputs and have valid ones
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "M"){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }
        
        $avengers = new Movie("Avengers", "PG-13");
        
        // the commented code won't run because $rating is private
        // echo $avengers->rating;
        
        $avengers->setRating("R");
        
        // instead I use a function
        echo $avengers->getRating();
        
        
        
        
        ?>


<?php include "footer.html" ?>