<?php

$generate_password = function($length) {
  $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,<.>/?!@#$%^&*()-_=+|";
  $final_password = "";
  for ($i = 0; $i < $length; $i++) {
  $final_password .= $characters[rand(0, strlen($characters))];
  }
  return $final_password;
};


echo $generate_password(8);
