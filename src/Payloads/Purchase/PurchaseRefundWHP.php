<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseRefundWHP extends PurchaseWHP
{
  public $purchaseFid;
  public $currency;
  public $amount;
}
