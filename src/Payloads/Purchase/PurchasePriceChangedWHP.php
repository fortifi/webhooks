<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchasePriceChangedWHP extends PurchaseWHP
{
  public $oldPriceFid;
  public $newPriceFid;
}
