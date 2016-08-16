<?php
namespace Fortifi\Webhooks\Payloads\PaymentAccount;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PaymentAccountUpdatedWHP extends DataNodeWHP
{
  public $ownerFid;
  public $paymentAccountFid;
}
