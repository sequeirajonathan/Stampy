<?php

use Phalcon\Mvc\Model;

class Stamps extends Model
{
    public $id;
    public $image;
    public $quantity;
    public $collection;
    public $name;
    public $year;
    public $description;
    public $posted;
}