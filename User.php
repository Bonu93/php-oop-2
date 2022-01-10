<?php 

class User {
    public $name;
    protected $lastname;
    protected $age;
    protected $level = 0;

    function __construct($_name, $_lastname, $_age)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
    }
}

class Premium_user extends User {
    public function setLevel($_level) {
        $this->level = $_level;
    }
}


$user4 = new User('Paolo', 'Duzioni', 30);

// var_dump($user4);


?>