<?php
namespace Fortifi\Webhooks\Payloads\Invoice;

class InvoiceTransactionWHP extends InvoiceWHP
{
  public $transactionId;
  public $transactionDate;
  public $amount = 0;
}
