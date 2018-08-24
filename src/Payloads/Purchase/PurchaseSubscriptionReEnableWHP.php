<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseSubscriptionReEnableWHP extends PurchaseWHP
{
  public $reEnableDate;
  public $nextRenewalDate;
  public $reason;
  public $autoCharge;
  public $renewalMode;
  public $shouldCancel;
  public $shouldSuspend;
  public $suspendDate;
  public $cancelDate;
}
