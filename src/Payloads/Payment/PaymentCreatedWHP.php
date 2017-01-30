<?php
namespace Fortifi\Webhooks\Payloads\Payment;

class PaymentCreatedWHP extends AbstractPaymentTransactionWHP
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
}
