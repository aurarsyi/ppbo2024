<?php
require_once 'Book.php';
require_once 'Author.php';
require_once 'Publisher.php';

$author = new Author();
$author->name = "Rintik Sedu";
$author->description = "Penulis buku";

$publisher = new Publisher();
$publisher->name = "Gramedia";
$publisher->address = "Bandung";
$publisher->setPhone("089736738212");

$book = new Book();
$book->ISBN = 763871790;
$book->title = "Kata";
$book->description = "Tentang senja yang kehilangan langitnya";
$book->category = "Novel";
$book->language = "Indonesia";
$book->numberOfPage = 543;
$book->author = $author->name;
$book->publisher = $publisher->name;

print_r($book->showAll());



