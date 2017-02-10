<?php
namespace Fortifi\Webhooks\Payloads\Invoice;

class InvoicePaidWHP extends InvoiceWHP
{
  public $transactionId;
  public $transactionDate;
  public $paymentMethod;

  public $paymentFids = [];
  public $transactionFids = [];
}
