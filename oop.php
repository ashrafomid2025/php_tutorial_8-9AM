<?php
abstract class Animal{
   public function sound(){
      echo "Animal can make sound";
   }
  abstract public function move();
}

class Cat extends Animal{
   public function move(){
      echo "Cat move with 4 legs";
   }
}

// polymorphism
class Bird extends Animal{
   public function move(){
      echo "bird can fly";
   }
}
// interface, abstract

interface Shape{
  public function Area();
  
   public function ShapeType();
}

class Circle implements Shape{
   public function Area(){
      echo 3.14 * 5 * 5;
   }
   public function ShapeType()
   {
      
   }
}
