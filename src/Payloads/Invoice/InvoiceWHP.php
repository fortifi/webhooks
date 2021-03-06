<?php
namespace Fortifi\Webhooks\Payloads\Invoice;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class InvoiceWHP extends DataNodeWHP
{
  public $customerFid;
  public $status; // Uses the InvoiceStatus enum
  public $amountPaid = 0;
  public $baseAmount = 0;
  public $discountAmount = 0;
  public $taxAmount = 0;
  public $totalAmount = 0;
  public $refundedAmount = 0;
  public $creditedAmount = 0;
  public $chargebackAmount = 0;
  public $dueDate;
  public $purchaseFids = [];

  public $currency;
  public $totalAmountUsd;
  public $exchangeRate;
}
