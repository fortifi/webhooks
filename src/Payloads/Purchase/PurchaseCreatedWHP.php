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

  public $cycleTerm; // e.g 3 for every 3 months
  public $cycleExact; // e.g. M for monday, or 3 for 3rd (based on cycle)
  public $cycleType; // One Time, Daily, Weekly, Monthly // ProductTermType enum

  public $quantity;

  public $createdTime;
  public $nextRenewDate;
}
