<?php

namespace erratbi\Payzone;





class TransactionAttempt {
  /**
   * Type of payment for this transaction attempt: CreditCard, BankTransfer or
   * ToditoCash
   *
   * @var String
   */
  private $paymentType;

  /**
   * Type of operation for that transaction: Can be sale or authorize.
   *
   * @var String
   */
  private $operation;

  /**
   * Date of the transaction
   *
   * @var timestamp
   */
  private $date;

  /**
   * Amount of the transaction
   *
   * @var integer
   */
  private $amount;

  /**
   * The result code for this transaction
   *
   * @var String
   */
  private $resultCode;

  /**
   * The result message for this transaction
   *
   * @var String
   */
  private $resultMessage;

  /**
   * Status of the transaction: "Authorized", "Not authorized", "Expired", "Call
   * failed", "Pending" or "Not processed"
   *
   * @var String
   */
  private $status;

  /**
   * Shopper information for this transaction
   *
   * @var Shopper
   */
  private $shopper;

  /**
   * Transaction identifier of this transaction.
   *
   * @var String
   */
  private $transactionID;

  /**
   * Identifier of the subscription this transaction is part of (if any).
   *
   * @var Int
   */
  private $subscriptionID;

  /**
   * Details of the payment mean used to process the transaction
   *
   * @var Depends on the paymentType
   */
  private $paymentMeanInfo;

  public function getPaymentType() {
    return $this->paymentType;
  }

  public function setPaymentType($paymentType) {
    $this->paymentType = $paymentType;
    return $this;
  }

  public function getOperation() {
    return $this->operation;
  }

  public function setOperation($operation) {
    $this->operation = $operation;
    return $this;
  }

  public function getDate() {
    return $this->date;
  }

  public function getDateAsDateTime() {
    if ($this->date != null) {
      // API returns date as timestamp in milliseconds
      $timestamp = intval($this->date / 1000);
      return new DateTime("@" . $timestamp);
    }

    return null;
  }

  public function setDate($date) {
    $this->date = $date;
    return $this;
  }

  public function getAmount() {
    return $this->amount;
  }

  public function setAmount($amount) {
    $this->amount = $amount;
    return $this;
  }

  public function getResultCode() {
    return $this->resultCode;
  }

  public function setResultCode($resultCode) {
    $this->resultCode = $resultCode;
    return $this;
  }

  public function getResultMessage() {
    return $this->resultMessage;
  }

  public function setResultMessage($resultMessage) {
    $this->resultMessage = $resultMessage;
    return $this;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
    return $this;
  }

  public function getShopper() {
    return $this->shopper;
  }

  public function setShopper($shopper) {
    $this->shopper = $shopper;
    return $this;
  }

  public function getTransactionID() {
    return $this->transactionID;
  }

  public function setTransactionID($transactionID) {
    $this->transactionID = $transactionID;
    return $this;
  }

  public function getSubscriptionID() {
    return $this->subscriptionID;
  }

  public function setSubscriptionID($subscriptionID) {
    $this->subscriptionID = $subscriptionID;
    return $this;
  }

  public function getPaymentMeanInfo() {
    return $this->paymentMeanInfo;
  }

  public function setPaymentMeanInfo($paymentMeanInfo) {
    $this->paymentMeanInfo = $paymentMeanInfo;
    return $this;
  }
}