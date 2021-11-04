<?php

namespace Fortifi\Webhooks\Payloads\Payment;

class PaymentPaypalAgreementCancelledWHP extends AbstractPaymentTransactionWHP
{
  public $agreementId;
  public $customerFid;
  public $expireDate;
  public $expireReason;
  public $payerEmail;
  public $payerId;
  public $paymentMethodFid;
  public $startDate;
}
