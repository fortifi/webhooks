<?php
namespace Fortifi\Webhooks\Events;

final class PaymentWHE
{
  const CREATED = 'payment.created';
  const AUTHORISATION_TRANSACTION = 'payment.authorisation.transaction';
  const FAILED_TRANSACTION = 'payment.failed.transaction';
  const CHARGEBACK = 'payment.chargeback';
  const AGREEMENT_CANCELLED = 'payment.paypal.agreement.cancelled';
}
