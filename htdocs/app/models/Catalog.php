<?php

use Phalcon\Mvc\Model;

class Catalog extends Model
{
    public $catalogid;
    public $journal;
    public $publisher;
    public $edition;
    public $title;
    public $author;

public function initialize()
    {
        $this->setSource("catalog");
    }
}

?>