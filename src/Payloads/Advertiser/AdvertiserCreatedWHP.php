<?php
namespace Fortifi\Webhooks\Payloads\Advertiser;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeCreatedWHP;

class AdvertiserCreatedWHP extends DataNodeCreatedWHP
{
  public $email;
  public $advertiserType;
  public $foundationFid;
  public $website;
  public $accountManagerFid;
  public $phone;
  public $name;
  public $userFid;
}
