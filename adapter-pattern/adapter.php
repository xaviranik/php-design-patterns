<?php

// Interface for Book
interface BookInterface {
	public function open();
	public function turnPage();
}

// Interface for eBook Reader
interface eReaderInterface {
	public function turnOn();
	public function pressNextButton();
}

class Book implements BookInterface {

	public function open()
	{
		var_dump("Opening the book");
	}

	public function turnPage()
	{
		var_dump("Turning the page");
	}
}

class Kindle implements eReaderInterface {

	public function turnOn()
	{
		var_dump("Turning on Kindle");
	}

	public function pressNextButton()
	{
		var_dump("Press the next button on Kindle");
	}
}

class Nook implements eReaderInterface {

	public function turnOn()
	{
		var_dump("Turning on Nook");
	}

	public function pressNextButton()
	{
		var_dump("Press the next button on Nook");
	}
}

// Let's Create a adapter to bind KindleInterface to BookInterface
class eReaderAdapter implements BookInterface {

	protected $reader;

	public function __construct(eReaderInterface $reader)
	{
		$this->reader = $reader;
	}

	public function open()
	{
		return $this->reader->turnOn();
	}

	public function turnPage()
	{
		return $this->reader->pressNextButton();
	}
}

class Person {
	
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}

(new Person())->read(new Book());
(new Person())->read(new eReaderAdapter(new Kindle));
(new Person())->read(new eReaderAdapter(new Nook));