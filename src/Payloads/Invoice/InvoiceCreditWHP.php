<?php
namespace Fortifi\Webhooks\Payloads\Invoice;

class InvoiceCreditWHP extends InvoiceWHP
{
  public $chargeRequestFid;
  public $creditAmountType;
  public $amount;
  public $reasonFid;
  public $currency;
  public $creditDate;
}
