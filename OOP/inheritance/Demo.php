<?php

require_once "Example.php";
class Demo extends Example
{
  public $age = '22';
  public $location = "chawkbazar";
  public $phone ='01854992594';

  public function one(){
      echo "first function";
      echo $this->age;      //use own class object($this->) for calling another property in same class
      echo $this->three();  //use own class object($this->) for calling another method in same class
      echo  $this->threeF();
  }

     protected function two(){
      echo "second function";
  }
      public function three(){
      echo "third function";

  }


                                //Magic Method(All Magic method by default public)

//    public function __call($name, $arguments)
//    {
//        // TODO: Implement __call() method.
//        echo "lol";
//    }

    public function __construct()
    {
        echo "lol";
    }

}

