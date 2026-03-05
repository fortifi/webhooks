<?php

namespace Fortifi\Webhooks\Payloads\Review;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class ReviewTrustpilotWHP extends DataNodeWHP
{
  public $customerFid;
  public $rating;
  public $ratingMax;
  public $providerId;
  public $providerUrl;
}
