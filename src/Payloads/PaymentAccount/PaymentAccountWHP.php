<?php
namespace Fortifi\Webhooks\Payloads\PaymentAccount;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

abstract class PaymentAccountWHP extends DataNodeWHP
{
  public $ownerFid;
  public $paymentAccountType;

  public $brandFid;
  public $projectId;
  public $tokenUuid;
  public $methodType;
  public $methodScheme;
  public $methodProvider;
  public $methodInputType;
  public $expiryDate;
  public $accountHolder;
  public $issuerName;
  public $methodSubType;
  public $last4;
  public $lookupCode;

}
