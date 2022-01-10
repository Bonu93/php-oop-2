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
    protected $level = 1;
    protected $discount;

    function __construct($_name, $_lastname, $_age) {
        parent::__construct($_name, $_lastname, $_age);
        $this->setDiscount();
    }


    public function setLevel($_level) {
        $this->level = $_level;
        $this->setDiscount();
    }

    public function setDiscount() {
        if ($this->level == 1) {
            $this->discount = 15;
        } elseif ($this->level > 1){
            $this->discount = 25;
        } else {
            $this->discount = 0;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}




?>