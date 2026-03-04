<?php

class Animal{
   private $name;
   private $age;
   
   public function __construct($nam, $sin){
      $this->name = $nam;
      $this->age = $sin;
   }
  
   public function eat(){
      return "$this->name can eat something";
   }
   public function drink(){
      return "$this->name can drink";
   }
   public function setName($name){
      $this->name = $name;
   }
   public function getName(){
      return $this->name;
   }
}

$animalNo1 = new Animal("Cat", 3);
// echo $animalNo1->getName();

class Human extends Animal{
   private $degreeOfEducation;
   private $lastName;
   public function __construct($name,$age, $degree, $lastName){
      $this->degreeOfEducation = $degree;
      $this->lastName = $lastName;
      parent::__construct($name,$age);
   }
   // override
   public function Think(){
      return "Human can think";
   }


}

$person1 =new Human("Ali",23,12,"Ahmadi");
$person1->setName("Aliullah");
echo $person1->getName();
// echo $person1->Think();