<?php
namespace Fortifi\Webhooks\Payloads\Advertiser\Campaign;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeCreatedWHP;

class AdvertiserCampaignCreatedWHP extends DataNodeCreatedWHP
{
  public $affiliateFid;
  public $companyFid;
  public $hash;
}
