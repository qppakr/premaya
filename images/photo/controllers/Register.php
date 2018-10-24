<?php
require('Connect.php');

/**
 *
 */
class Register
{
  var $username = 'Test uesrname';
  var $password;

  function Resgister($username){
    echo $this->username = $username;
    return $username;
  }
}
