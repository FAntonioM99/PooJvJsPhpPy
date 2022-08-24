<?php

class Car{

  public  $id;
  public  $licence;
  public  $driver;
  public  $passenger;
  
  function __construct($licence, $driver) {
    $this->licence = $licence;
    $this->driver = $driver;
  }
  
  function print_Data()
  {
    echo $this->licence;
    echo $this->driver->name;
    echo $this->driver->document;
  }


}

?>