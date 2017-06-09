<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseSubscriptionCancelWHP extends PurchaseWHP
{
  public $refundType; // SubscriptionRefundType
  public $closeReason; // SubscriptionCloseReason

  public $terminationFee;
  public $endDate;
  public $cancelAtNextRenewal;

  public $refundAmount;
  public $refundCurrency;
  public $refundTotalAmountUsd;
  public $refundExchangeRate;
}
