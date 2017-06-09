<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseSubscriptionCancelWHP extends PurchaseWHP
{
  public $refundType; // SubscriptionRefundType
  public $closeReason; // SubscriptionCloseReason

  /** @var bool */
  public $terminationFee;
  public $endDate;

  public $refundAmount;
  public $refundCurrency;
  public $refundTotalAmountUsd;
  public $refundExchangeRate;
}
