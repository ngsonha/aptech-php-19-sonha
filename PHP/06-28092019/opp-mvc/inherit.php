<?php 
    class  Hero{
        protected $name;

        public function __construct($name = "Undefined")
            {
            echo "Start of class<br>";
            $this->name = $name;

            }

        public function setName($name){
            $this->name=$name;
            return $this;
        }

        public function getName(){
            return $this->name;
        }

        public function display()
        {
            echo $this->name;
        }

        public function __destruct()
        {
            echo "End of class <br>";
        }
    }

    class Antimage extends Hero
    {
    public function __construct()
    {
    parent::__construct("ANTIMAGE");
    }
    public function setName($name)
    {
    echo "You can not setName is $name for this hero.<br>";
    return $this;
    }
    }
    $nam =new Antimage();
    $nam->setName("ABC")->display();


?>