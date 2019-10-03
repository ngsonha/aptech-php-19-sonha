<?php 

    class Hero{
        protected $name;

        public static function helloWorld()
        {
            echo "Hello World </br>";
        }

        public function __construct($name="Son Ha"){
            echo "Begin of class";
            $this->name=$name;
        }

        public function setName($name)
        {
            $this->name=$name;
            return $this;
        }

        public function getName()
        {
            return $this->name;
        }

        public function display()
        {
            echo $this->name . "</br>";
        }

        public function __destruct()
        {
            echo "End of class <br>";
        }

    }
    Hero::helloWorld();
    $antimage = new Hero;
    $antimage->setName("hehehe")->display();

?>