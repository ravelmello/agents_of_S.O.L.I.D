<?php

/**
 * Created by PhpStorm.
 * User: ravelmello
 * Date: 08/12/16
 * Time: 12:57
 */
class Book
{
    /**
     * @var string $title
     */
    private $title;

    /**
     * @var integer $isbn
     */
    private $isbn;

    /**
     * @var string $author
     */
    private $author;


    /**
     * @var integer $year
     */
    private $year;

    /**
     * @var DateTime $publishedAt
     */
    private $publishedAt;

    /**
     * @var integer $quantityOfPages
     */
    private $quantityOfPages;

    /**
     * Book constructor.
     */
    public function __construct()
    {
        $this->publishedAt = new DateTime();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param int $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param DateTime $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return int
     */
    public function getQuantityOfPages()
    {
        return $this->quantityOfPages;
    }

    /**
     * @param int $quantityOfPages
     */
    public function setQuantityOfPages($quantityOfPages)
    {
        $this->quantityOfPages = $quantityOfPages;
    }


    

}