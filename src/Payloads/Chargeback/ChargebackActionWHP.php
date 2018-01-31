<?php
namespace Fortifi\Webhooks\Payloads\Chargeback;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class ChargebackActionWHP extends DataNodeWHP
{
  public $state;
  public $userFid;
  public $source;
  public $chargebackFid;
  public $caseNumber;
  public $refunded;
}
