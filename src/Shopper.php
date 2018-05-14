<?php

namespace erratbi\Payzone;


class Shopper {
  /**
   * Name provided by the shopper
   *
   * @var String
   */
  private $name;

  /**
   * Address provided by the shopper
   *
   * @var String
   */
  private $address;

  /**
   * Zipcode provided by the shopper.
   *
   * @var String
   */
  private $zipcode;

  /**
   * City provided by the shopper.
   *
   * @var String
   */
  private $city;

  /**
   * State provided by the shopper
   *
   * @var String
   */
  private $state;

  /**
   * Country provided by the shopper.
   *
   * @var String
   */
  private $countryCode;

  /**
   * Phone provided by the shopper
   *
   * @var String
   */
  private $phone;

  /**
   * Email address provided by the shopper.
   *
   * @var String
   */
  private $email;

  /**
   * Birth date provided by the shopper (YYYYMMDD)
   *
   * @var string
   */
  private $birthDate;

  /**
   * ID number provided by the shopper (identity card, passport...)
   *
   * @var string
   */
  private $idNumber;

  /**
   * IP address of the shopper
   *
   * @var String
   */
  private $ipAddress;

  public function getname() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  public function getAddress() {
    return $this->address;
  }

  public function setAddress($address) {
    $this->address = $address;
    return $this;
  }

  public function getZipcode() {
    return $this->zipcode;
  }

  public function setZipcode($zipcode) {
    $this->zipcode = $zipcode;
    return $this;
  }

  public function getCity() {
    return $this->city;
  }

  public function setCity($city) {
    $this->city = $city;
    return $this;
  }

  public function getState() {
    return $this->state;
  }

  public function setState($state) {
    $this->state = $state;
    return $this;
  }

  public function getCountryCode() {
    return $this->countryCode;
  }

  public function setCountryCode($countryCode) {
    $this->countryCode = $countryCode;
    return $this;
  }

  public function getPhone() {
    return $this->phone;
  }

  public function setPhone($phone) {
    $this->phone = $phone;
    return $this;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  public function getBirthDate() {
    return $this->birthDate;
  }

  public function setBirthDate($birthDate) {
    $this->birthDate = $birthDate;
    return $this;
  }

  public function getIdNumber() {
    return $this->idNumber;
  }

  public function setIdNumber($idNumber) {
    $this->idNumber = $idNumber;
    return $this;
  }

  public function getIpAddress() {
    return $this->ipAddress;
  }

  public function setIpAddress($ipAddress) {
    $this->ipAddress = $ipAddress;
    return $this;
  }
}