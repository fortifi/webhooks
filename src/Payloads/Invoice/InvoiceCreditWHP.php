<?php
namespace ortifi\Webhooks\Payloads\Invoice;

use Fortifi\Webhooks\Payloads\Invoice\InvoiceWHP;

class InvoiceCreditWHP extends InvoiceWHP
{
  public $chargeRequestFid;
  public $creditAmountType;
  public $amount;
  public $reasonFid;
  public $currency;
  public $creditDate;
}
