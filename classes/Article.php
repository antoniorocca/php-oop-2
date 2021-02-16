<?php

class Article {
    public $category;
    public $author;
    public $length;
    public $year;

    function __construct(string $category, string $author, int $lenght, int $year) {
        $this->category = $category;
        $this->author = $author;
        $this->lenght = $lenght;
        $this->year = $year;
    }
}
?>