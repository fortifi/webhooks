<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchasePriceChangedWHP extends PurchaseWHP
{
  public $oldPriceFid;
  public $oldPriceName;
  public $oldPriceAmount;
  public $oldPriceCurrency;

  public $newPriceFid;
  public $newPriceName;
  public $newPriceAmount;
  public $newPriceCurrency;
}
