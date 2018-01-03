<?php
namespace Fortifi\Webhooks\Payloads\Payment;

class PaymentChargebackWHP extends AbstractPaymentTransactionWHP
{
  /** @var int */
  public $chargebackDate;

  /** @var float */
  public $chargebackAmount;

  /** @var float */
  public $originalTransactionAmount;

  /** @var float */
  public $remainingAmount;

  /** @var string */
  public $agentFid;
}
