<?php
namespace Fortifi\Webhooks\Payloads\Payment;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

abstract class AbstractPaymentTransactionWHP extends DataNodeWHP
{
  public $customerFid;
  public $currency;
  public $status;
  public $amount;
  public $transactionDate;
  public $transactionID;
  public $paymentMethod;
  public $paymentGateway;
}
