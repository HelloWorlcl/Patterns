<?php
/**
 * Created by PhpStorm.
 * User: Everest
 * Date: 16.08.2018
 * Time: 12:25
 */

namespace BehavioralPatterns\Iterator;

class Book
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $author;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitleAndAuthor(): string
    {
        return $this->title . ' by ' . $this->author;
    }
}
