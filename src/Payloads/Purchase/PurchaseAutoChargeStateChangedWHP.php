<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseAutoChargeStateChangedWHP extends PurchaseWHP
{
  public $purchaseFid;
  public $autoChargeState;
}
