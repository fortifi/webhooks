<?php

namespace Fortifi\Webhooks\Payloads\Review;

abstract class AbstractReviewWHP
{
  public $fid;
  public $displayName;
  public $description;

  public $dateCreated;
  public $dateModified;
  public $dateStateChanged;

  public $rating;
  public $ratingMax;

  public $content;
}
