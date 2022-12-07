<?php


class Address{

  public $street_address;
  public $city;
  public $zip_code;
  public $country;

  /**
   * @param String $street_address La via dell'utente
   * @param String $city La città dell'utente
   * @param String $zip_code Il CAP dell'utente
   * @param String $country La nazione dell'utente
   */
  public function __construct($_street_address, $_city, $_zip_code, $_country)
  {
    $this->street_address = $_street_address;
    $this->city = $_city;
    $this->zip_code = $_zip_code;
    $this->country = $_country;
  }

  public function getFullAddress(){
    return "Indirizzo: $this->street_address, $this->zip_code, $this->city, $this->country ";
  }

}