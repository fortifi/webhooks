<?php
namespace Fortifi\Webhooks\Events;

final class PurchaseWHE
{
  const CREATED = 'purchase.created';
  const STATE_CHANGE = 'purchase.state.change';
  const PRICE_CHANGE = 'purchase.price.change';
  const REFUNDED = 'purchase.refunded';
  const SUBSCRIPTION_RENEW = 'purchase.subscription.renew';
  const AUTO_CHARGE_STATE_UPDATED = 'purchase.auto.charge.state.updated';
}
