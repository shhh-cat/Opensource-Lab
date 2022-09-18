<?php
class Person {
    private $name;
    private $id;

    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function __destruct()
    {
        $this->name = null;
        $this->id = null;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = strtoupper($name);
    }

    public function getId()
    {
        return $this->id;
    }

}