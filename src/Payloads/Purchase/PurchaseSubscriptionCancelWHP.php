<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseSubscriptionCancelWHP extends PurchaseWHP
{
  public $refundType; // SubscriptionRefundType
  public $closeReason; // SubscriptionCloseReason
  public $cancelTime;
  /** @var bool */
  public $terminationFee;
}
