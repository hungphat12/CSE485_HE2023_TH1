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
        return $his->year;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function getChapters() {
        return $this->chapters;
    }
}

class BookList {
    private $books = array();

    public function addBook(Book $book) {
        array_push($this->books, $book);
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortByName() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getName(), $b->getName());
        });
    }

    public function sortByYear() {
        usort($this->books, function($a, $b) {
            return $a->getYear() - $b->getYear();
        });
    }
}

$bookList = new BookList();

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "Scribner", 1925, "978-0684830421", array("I. In my younger and more vulnerable years", "II. About halfway between West Egg and New York"));
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", "J. B. Lippincott & Co.", 1960, "978-0446310789", array("Part One", "Part Two"));
$book3 = new Book("1984", "George Orwell", "Secker & Warburg", 1949, "978-0451524935", array("Part One", "Part Two"));

$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book3);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $year = $_POST["year"];
    $isbn = $_POST["isbn"];
    $chapters = explode(", ", $_POST["chapters"]);

    $bookList->addBook(new Book($name, $author, $publisher, $year, $isbn, $chapters));
}

if (isset($_GET["sort"])) {
    $sortMethod = $_GET["sort"];
    switch ($sortMethod) {
        case "name":
            $bookList->sortByName();
            break;
        case "year":
            $bookList->sortByYear();
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Book List</title>
</head>
<body>
  <h1>Book List</h1>
  <a href="?sort=name">Sort by Name</a> | <a href="?sort=year">Sort by Year</a>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Year</th>
        <th>ISBN</th>
        <th>Chapters</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($bookList->getBooks() as $book): ?>
      <tr>
        <td><?php echo $book->getName(); ?></td>
        <td><?php echo $book->getAuthor(); ?></td>
        <td><?php echo $book->getPublisher(); ?></td>
        <td><?php echo $book->getYear(); ?></td>
        <td><?php echo $book->getISBN(); ?></td>
        <td><?php echo implode(", ", $book->getChapters()); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <h1>Add Book</h1>
  <form method="post">
    <label>Name:</label><br>
    <input type="text" name="name"><br>
    <label>Author:</label><br>
    <input type="text" name="author"><br>
    <label>Publisher:</label><br>
    <input type="text" name="publisher"><br>
    <label>Year:</label><br>
    <input type="number" name="year"><br>
    <label>ISBN:</label><br>
    <input type="text" name="isbn"><br>
    <label>Chapters (comma separated):</label><br>
    <input type="text" name="chapters"><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>