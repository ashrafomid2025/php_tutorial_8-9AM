<?php

class User{
   protected $name;
   public $email;

   public $userType = "user";

   public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;
   
   }
   // desctruct, clone,
 

   public function Message(){
      return "$this->name sent you a message";
   }

   public function addFriend(){
      return "$this->email added you as a friend";
   }
}

class AdminUser extends User{
  public static $level;
  public function __construct($name, $email, $level){
      $this->level = $level;
      parent::__construct($name, $email);
  }
    public function Message(){
      return "$this->name ,admin, sent you a message";
   }
   public static function deleteUser(){
      echo "One user has been deleted";
   } 
   // static 
}

AdminUser::deleteUser();

