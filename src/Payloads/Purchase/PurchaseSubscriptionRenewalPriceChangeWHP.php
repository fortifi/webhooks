<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseSubscriptionRenewalPriceChangeWHP extends PurchaseWHP
{
  public $subscriptionFid;
  public $oldRenewalAmount;
  public $oldDiscountAmount;
  public $oldTaxAmount;
  public $oldRenewalAmountUsd;
  public $oldOfferFid;
  public $newRenewalAmount;
  public $newDiscountAmount;
  public $newTaxAmount;
  public $newRenewalAmountUsd;
  public $newOfferFid;
}
