<?php

class Book {

	public function open()
	{
		echo "Opening the book";
	}

	public function turnPage()
	{
		echo "Turning the page";
	}
}

class Person {
	
	public function read(Book $book)
	{
		$book->open();
		$book->turnPage();
	}
}