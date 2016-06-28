<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseCreatedWHP extends PurchaseWHP
{
  public $offerFid;
  public $uniqueReference; //Can be used for licence keys etc

  public $amount;
  public $setupAmount;
  public $totalAmount;
  public $taxAmount;
  public $nextRenewalAmount;

  public $discount;
  public $setupDiscount;

  public $currency;

  public $cycleTerm;
  public $cycleExact;
  public $cycleType;

  public $quantity;
}
