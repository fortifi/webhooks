<?php
namespace Fortifi\Webhooks\Payloads\Payment;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PaymentMethodLockedWHP extends DataNodeWHP
{
  public $paymentMethodFid;
  public $lockExpiresAt;
}

