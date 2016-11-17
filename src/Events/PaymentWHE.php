<?php
namespace Fortifi\Webhooks\Events;

final class PaymentWHE
{
  const CREATED = 'payment.created';
  const CREDIT_CARD_CREATED = 'payment.card.created';
  const CREDIT_CARD_UPDATED = 'payment.card.updated';
  const CREDIT_CARD_DELETED = 'payment.card.deleted';
}
