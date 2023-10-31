<?php
namespace Fortifi\Webhooks\Payloads\Messenger;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class MessengerWHP extends DataNodeWHP
{
  public $customerFid;
  public $emailAddress;
  public $deliveryFid;
  public $companyFid;
  public $emailFid;
}
