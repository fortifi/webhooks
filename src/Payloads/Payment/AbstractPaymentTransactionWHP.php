<?php
namespace Fortifi\Webhooks\Payloads\Payment;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

abstract class AbstractPaymentTransactionWHP extends DataNodeWHP
{
  public $customerFid;
  public $orderFid;
  public $currency;
  public $statusCode;
  public $statusMessage;
  public $amount;
  public $transactionDate;
  public $transactionID;
  public $paymentGateway;
}
