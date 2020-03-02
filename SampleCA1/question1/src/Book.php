<?php
namespace Tudublin;


class Book
{
    private $id = -1;
    private $title;
    private $price;
    private $author;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function __toString()
    {
        return "id = $this->id, title = $this->title, price = $this->price, author= $this->author\n---";
    }

}