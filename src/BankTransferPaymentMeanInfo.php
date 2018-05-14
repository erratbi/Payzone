<?php

namespace erratbi\Payzone;

class BankTransferPaymentMeanInfo {
  /**
   * Sender account
   *
   * @var BankAccount
   */
  private $sender;

  /**
   * Recipient account
   *
   * @var BankAccount
   */
  private $recipient;

  public function getSender() {
    return $this->sender;
  }

  public function setSender($sender) {
    $this->sender = $sender;
    return $this;
  }

  public function getRecipient() {
    return $this->recipient;
  }

  public function setRecipient($recipient) {
    $this->recipient = $recipient;
    return $this;
  }
}