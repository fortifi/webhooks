<?php
namespace ortifi\Webhooks\Payloads\Payment;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PaymentCreatedWHP extends DataNodeWHP
{
  public $invoiceFID;
  public $orderFid;
  public $paymentAmount;
  public $currencyCode;
  public $paymentDate;
  public $paymentMethod;
  public $type;
  public $exchangeRate;
  public $feeExchangeRate;
}
