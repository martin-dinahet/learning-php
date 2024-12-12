<?php

class User {
  public $username;
  public $password;

  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  public function displayInfo() {
    echo("Username : " . $this->username . "<br>");
    echo("Password : " . $this->password . "<br>");
  }
}

$user1 = new User("Emmanuel Macron", "abc123");
$user1->displayInfo();
