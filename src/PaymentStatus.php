<?php

namespace erratbi\Payzone;


class PaymentStatus {
  /**
   * Status of the payment: "Authorized", "Not authorized", "Expired", "Call
   * failed", "Pending" or "Not processed"
   *
   * @var String
   */
  private $status;

  /**
   * The merchant token of this payment
   *
   * @var String
   */
  private $merchantToken;

  /**
   * Type of operation for the last transaction done for this payment: Can be
   * sale or authorize.
   *
   * @var String
   */
  private $operation;

  /**
   * Result code of the last transaction done for this payment
   *
   * @var Int
   */
  private $errorCode;

  /**
   * Error message of the last transaction done for this payment
   *
   * @var String
   */
  private $errorMessage;

  /**
   * The order ID of the payment
   *
   * @var String
   */
  private $orderID;

  /**
   * Currency for the payment
   *
   * @var String
   */
  private $currency;

  /**
   * Amount of the payment in cents (1.00€ => 100)
   *
   * @var Int
   */
  private $amount;

  /**
   * Custom data provided by merchant at payment creation.
   *
   * @var String
   */
  private $ctrlCustomData;

  /**
   * The list of transactions done to complete this payment
   *
   * @var array
   */
  private $transactions;

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
    return $this;
  }

  public function getMerchantToken() {
    return $this->merchantToken;
  }

  public function setMerchantToken($merchantToken) {
    $this->merchantToken = $merchantToken;
    return $this;
  }

  public function getOperation() {
    return $this->operation;
  }

  public function setOperation($operation) {
    $this->operation = $operation;
    return $this;
  }

  public function getErrorCode() {
    return $this->errorCode;
  }

  public function setErrorCode($errorCode) {
    $this->errorCode = $errorCode;
    return $this;
  }

  public function getErrorMessage() {
    return $this->errorMessage;
  }

  public function setErrorMessage($errorMessage) {
    $this->errorMessage = $errorMessage;
    return $this;
  }

  public function getOrderID() {
    return $this->orderID;
  }

  public function setOrderID($orderID) {
    $this->orderID = $orderID;
    return $this;
  }

  public function getCurrency() {
    return $this->currency;
  }

  public function setCurrency($currency) {
    $this->currency = $currency;
    return $this;
  }

  public function getAmount() {
    return $this->amount;
  }

  public function setAmount($amount) {
    $this->amount = $amount;
    return $this;
  }

  public function getCtrlCustomData() {
    return $this->ctrlCustomData;
  }

  public function setCtrlCustomData($ctrlCustomData) {
    $this->ctrlCustomData = $ctrlCustomData;
    return $this;
  }

  public function getTransactions() {
    return $this->transactions;
  }

  public function setTransactions($transactions) {
    $this->transactions = $transactions;
    return $this;
  }

  /**
   * Return the last transaction attempt done for this payment
   *
   * @return TransactionAttempt The last transaction attempt done for this
   *         payment
   */
  public function getLastTransactionAttempt() {
    $lastAttempt = null;

    if (isset($this->transactions) && is_array($this->transactions) && count($this->transactions) > 0) {
      // Return the entry with the highest timestamp with type sale or authorize
      foreach ($this->transactions as $transaction) {
        if (in_array($transaction->getOperation(), array("sale", "authorize"))) {
          if ($lastAttempt == null || $lastAttempt->getDate() < $transaction->getDate()) {
            $lastAttempt = $transaction;
          }
        }
      }
    }

    return $lastAttempt;
  }
}