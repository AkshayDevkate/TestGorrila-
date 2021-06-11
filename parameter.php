<?php

class ArraySort{// clss name
  private $arrayPassed = [];
  //default constructor takes arguments from class 
  public function __construct(array $arrayPassed){
    $this->arrayPassed = $arrayPassed;
  }

  public function arrsort() { // call constructor
    //sorting array
    sort($this->arrayPassed);
    return $this->arrayPassed;
  }
}

  
// array passed to the class
$newarray = array(11,-2,4,35,0,8,-9);



$ArraySort =  new ArraySort($newarray);

print_r($ArraySort->arrsort());



?>
