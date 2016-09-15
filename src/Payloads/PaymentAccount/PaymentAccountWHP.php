<?php
namespace Fortifi\Webhooks\Payloads\PaymentAccount;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

abstract class PaymentAccountWHP extends DataNodeWHP
{
  public $ownerFid;
  public $paymentAccountType;
}
