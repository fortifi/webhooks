<?php
namespace Fortifi\Webhooks\Payloads\Payment;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PaymentCreatedWHP extends DataNodeWHP
{
  public $invoiceFID;
  public $orderFid;
  public $paymentAmount;
  public $currencyCode;
  public $paymentDate;
  public $paymentMethod;
  public $type;
  public $accountType; // Visa, Amex, PayPal etc
  public $fee;
  public $feeCurrency;
  public $customerFid;
  public $transactionId;

  public $currency;
  public $totalAmountUsd;
  public $exchangeRate;

  public $paymentGatewayFid;
}
