<?php
namespace Fortifi\Webhooks\Payloads\Order;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class OrderWHP extends DataNodeWHP
{
  public $customerFid;
  public $orderHash;
}
