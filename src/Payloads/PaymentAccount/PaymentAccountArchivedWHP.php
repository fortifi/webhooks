<?php
namespace Fortifi\Webhooks\Payloads\PaymentAccount;

class PaymentAccountArchivedWHP extends PaymentAccountWHP
{
  public $cardLast4;
  public $paypalAgreementId;
  public $subscriptionsAffected = [];
}
