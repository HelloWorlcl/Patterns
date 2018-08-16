<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 16.08.2018
 * Time: 12:25
 */

namespace BehavioralPatterns\Iterator;

class BookList implements \Iterator, \Countable
{
    /** @var Book[] */
    protected $books = [];

    /** @var int */
    protected $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getTitleAndAuthor() === $bookToRemove->getTitleAndAuthor()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    /**
     * @return Book
     */
    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->currentIndex;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->books);
    }
}
