<?php

class Car{

  public  $id;
  public  $name;
  public  $document;
  public  $email;
  public $password;
  
  function __construct($name, $document) {
    $this->name = $name;
    $this->document = $document;
  }
  
 

}

?>