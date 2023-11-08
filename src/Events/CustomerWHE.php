<?php
namespace Fortifi\Webhooks\Events;

final class CustomerWHE
{
  const CREATED = 'customer.created';
  const SUBJECT_ACCESS_REQUEST = 'customer.sar';
  const EMAIL_UNSUBSCRIBED = 'customer.email.unsubscribed';
  const DEFAULT_EMAIL_UPDATED = 'customer.default-email.updated';
}
