<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountWHP;

class PaymentAccountRefundWHP extends PaymentAccountWHP
{
  public $purchaseFid;
}
