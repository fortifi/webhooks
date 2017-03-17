<?php
namespace Fortifi\Webhooks\Payloads\Transaction;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class TransactionFailedWHP extends DataNodeWHP
{
  public $subscriptionFid;
  public $subscriptionName;
  public $renewalAttemptNumber;
  public $renewalAmount;
  public $renewalAmountUsd;
  public $exchangeRate;
  public $transactionDate;
  public $ipnErrorMessage;
  public $customerFid;
}
