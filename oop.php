<?php


// add friend, post
// username, email

class User{
   public $username ;
   public $email;

   public function __construct($name,$email){
    $this->username = $name;
    $this->email = $email;
   }
  

   public function post(){
    return "$this->username posted something";
   }
   public function addFriend(){
     return "$this->username added a friend";
   }
}

$userOne = new User('aliahmadi','email@example.com');

$userTwo = new User('freshta2026','freshta@example.com');

echo $userTwo->post(). "<br>";
echo $userOne->post();
