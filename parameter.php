<?php

class sortClass{// clss name
  private $arrayPassed = [];// using private access modifier pass the array index
  public function __construct(array $arrayPassed){// pass default constructor
    $this->arrayPassed = $arrayPassed;
  }

  public function sort() { // call constructor
    sort($this->arrayPassed);
    return $this->arrayPassed;
  }
}

$newarray = array(11,-2,4,35,0,8,-9);


//default constructor class name ani construcotr name same
$sortClass =  new sortClass($newarray);

print_r($sortClass->sort());

?>
