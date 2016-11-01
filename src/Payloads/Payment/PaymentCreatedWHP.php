<?php
namespace ortifi\Webhooks\Payloads\Payment;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PaymentCreatedWHP extends DataNodeWHP
{
  public $purchaseFid;
  public $invoiceFID;
  public $orderFid;
  public $paymentAmountFid;
  public $currencyCode;
  public $paymentDate;
  public $paymentMethod;
}
