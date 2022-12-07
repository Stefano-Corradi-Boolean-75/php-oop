<?php 


class User{

  public $name;
  public $lastname;
  public $address;
  public static $race = "Umano";

  /**
   * @param String $name
   * @param String $lastname
   * @param Address $address
   */
  public function __construct($_name, $_lastname, Address $_address = null)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->address = $_address;
  }

  public static function getRace($string){
    return $string . self::$race;
  }

}