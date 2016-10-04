<?php
namespace Fortifi\Webhooks\Events;

final class PurchaseWHE
{
  const CREATED = 'purchase.created';
  const STATE_CHANGE = 'purchase.state.change';
  const PRICE_CHANGE = 'purchase.price.change';
  const REFUNDED = 'purchase.refunded';
}
