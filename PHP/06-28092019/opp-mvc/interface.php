<?php 

interface Move{
    const SPEED =300;
    const STOP = 0;
    public function run();
    public function stop();
}

interface Hit{
    const BASE_DAMAGE=50;
    public function hit();
}

class Hero implements Move ,Hit{
    protected $name;
    protected $speed;
    protected $damage;

public function __construct($name="Underfined")
{
    echo "Start of class<br>";
    $this->name=$name;
    $this->display();
    $this->speed=Move::STOP;
}

public function run()
{
    $this->speed= Move::SPEED;
    echo "$this->name is run ,speed=$this->speed.<br>";
    return $this;
}

public function stop()
{
    $this->speed= Move::STOP;
    echo "$this->name is stop, speed = $this->speed.<br>";
    return $this;
}

public function hit()
{
    $this->damage=Hit::BASE_DAMAGE;
    echo "With $this->damage damages, $this->name hits to the creep.<br>";
    return $this;
}

public function display() {
    echo "Hero's name :$this->name.<br>";
}

public function __destruct(){
    echo "end of class .<br>";
}
}

$antimage =new Hero("Antimage");
$antimage->run()->hit()->stop();
?>