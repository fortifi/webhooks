<?php

namespace Fortifi\Webhooks\Payloads\Review;

class ReviewTrustpilotWHP extends AbstractReviewWHP
{
  public $provider;
  public $providerRating;
  public $providerRatingContent;
  public $providerRatingMax;
  public $providerRatingSubject;
  public $providerUrl;
}
