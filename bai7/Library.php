<?php
class Book {
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
}

interface Downloadable {
    public function download();
}

class Ebook extends Book implements Downloadable {
    public $fileSize;

    public function __construct($title, $author, $price, $fileSize) {
        parent::__construct($title, $author, $price); 
        $this->fileSize = $fileSize;
    }

    public function download() {
        echo "Đang tải sách '{$this->title}' của tác giả {$this->author}... (Dung lượng: {$this->fileSize}MB)<br>";
    }
}

$myEbook = new Ebook("Lập trình PHP", "HUIT", 150000, 2.5);
$myEbook->download();
?>