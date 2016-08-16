<?php
namespace Fortifi\Webhooks\Payloads\PaymentAccount;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PaymentAccountCreatedWHP extends DataNodeWHP
{
  public $ownerFid;
  public $paymentAccountType;
}
