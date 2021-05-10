<?php


class employer{

    public $Name;
    public $Age;
    public $DateBirth;

    function __construct($name,$age,$db) {
        echo 'clas is created';
        $this->Name=$name;
        $this->Age=$age;
        $this->DateBirth=$db;
   }
};