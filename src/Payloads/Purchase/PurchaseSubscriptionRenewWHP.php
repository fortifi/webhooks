<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseSubscriptionRenewWHP extends PurchaseWHP
{
  public $subscriptionFid;
  public $nextRenewalDate;
  public $nextRenewalAmount;
  public $renewalsCount;
}
