<?php

interface IBook {
    public function getName();
    public function getAuthor();
    public function getPublisher();
    public function getYear();
    public function getISBN();
    public function getChapters();
}
class Book implements IBook {
    private $name;
    private $author;
    private $publisher;
    private $year;
    private $isbn;
    private $chapters;

    public function __construct($name, $author, $publisher, $year, $isbn, $chapters) {
        $this->name = $name;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getName() {
        return $this->name;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function getYear() {
        return $this->year;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function getChapters() {
        return $this->chapters;
    }
}
class BookList {
    private $books;

    public function __construct() {
        $this->books = [];
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortByName() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getName(), $b->getName());
        });
    }

    public function sortByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortByYear() {
        usort($this->books, function($a, $b) {
            return $a->getYear() - $b->getYear();
        });
    }
}
$bookList = new BookList();
$bookList->addBook(new Book("The Great Gatsby", "F. Scott Fitzgerald", "Scribner", 1925, "978-3-16-148410-0", ["Chapter 1", "Chapter 2", "Chapter 3"]));
$bookList->addBook(new Book("To Kill a Mockingbird", "Harper Lee", "J. B. Lippincott & Co.", 1960, "978-3-16-148410-1", ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4"]));
$bookList->addBook(new Book("1984", "George Orwell", "Secker & Warburg", 1949, "978-3-16-148410-2", ["Part 1", "Part 2", "Part 3", "Part 4"]));
$books = $bookList->getBooks();
$bookList->sortByAuthor();
echo "<h1>Book List</h1>";
echo "<table>";
echo "<tr><th>Name</th><th>Author</th><th>Publisher</th><th>Year</th><th>ISBN</th><th>Chapters</th></tr>";
foreach ($books as $book) {
    echo "<tr>";
    echo "<td>".$book->getName()."</td>";
    echo "<td>".$book->getAuthor()."</td>";
    echo "<td>".$book->getPublisher()."</td>";
    echo "<td>".$book->getYear()."</td>";
    echo "<td>".$book->getISBN()."</td>";
    echo "<td>".implode(", ", $book->getChapters())."</td>";
    echo "</tr>";
}
echo "</table>";