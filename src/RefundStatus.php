<?php

namespace erratbi\Payzone;


class RefundStatus {
  /**
   * Result code of the refund call
   *
   * @var Int
   */
  private $code;

  /**
   * Error message of the refund call
   *
   * @var String
   */
  private $message;

  /**
   * Transaction identifier of refund transaction.
   *
   * @var String
   */
  private $transactionID;

  public function getCode() {
    return $this->code;
  }

  public function setCode($code) {
    $this->code = $code;
    return $this;
  }

  public function getMessage() {
    return $this->message;
  }

  public function setMessage($message) {
    $this->message = $message;
    return $this;
  }

  public function getTransactionID() {
    return $this->transactionID;
  }

  public function setTransactionID($transactionID) {
    $this->transactionID = $transactionID;
    return $this;
  }
}