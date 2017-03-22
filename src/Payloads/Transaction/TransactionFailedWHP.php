<?php
namespace Fortifi\Webhooks\Payloads\Transaction;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class TransactionFailedWHP extends DataNodeWHP
{
  public $subscriptionFids = [];
  public $attemptNumber;
  public $amount;
  public $amountUsd;
  public $exchangeRate;
  public $transactionDate;
  public $errorMessage;
  public $errorCode;
  public $customerFid;
  public $gatewayTransactionId;
  public $serviceTransactionId;
}
