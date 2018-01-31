<?php
namespace Fortifi\Webhooks\Payloads\Chargeback;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeCreatedWHP;

class ChargebackWHP extends DataNodeCreatedWHP
{
  public $submittedTime;
  public $reason;
  public $caseNumber;
  public $paymentFid;
  public $amount;
  public $state;
  public $source;

  public $companyFid;
  public $customerFid;
  public $addressFid;
  public $currency;
  public $transactionAmount;
  public $usdTransactionAmount;
  public $usdChargebackAmount;
}
