<?php
namespace Fortifi\Webhooks\Events;

final class InvoiceWHE
{
  const CREATED = 'invoice.created';
  const ADD_PAYMENT = 'invoice.add.payment';
  const ADD_REFUND = 'invoice.add.refund';
  const ADD_CREDIT = 'invoice.add.credit';
  const DISREGARDED = 'invoice.disregarded';
  const PAID = 'invoice.paid';
}
