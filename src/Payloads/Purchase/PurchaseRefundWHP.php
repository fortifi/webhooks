<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseRefundWHP extends PurchaseWHP
{
  public $purchaseFid;
  public $amount;
  public $paymentMethod;
  public $paymentType;
}
