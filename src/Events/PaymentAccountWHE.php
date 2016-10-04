<?php
namespace Fortifi\Webhooks\Events;

final class PaymentAccountWHE
{
  const CREATED = 'payment.account.created';
  const UPDATED = 'payment.account.updated';
  const SET_DEFAULT = 'payment.account.default';
  const ARCHIVED = 'payment.account.archived';
  const REFUNDED = 'payment.account.refunded';
}
