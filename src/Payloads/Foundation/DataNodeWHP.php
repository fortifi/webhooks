<?php
namespace Fortifi\Webhooks\Payloads\Foundation;

use Fortifi\Webhooks\Payloads\FortifiWebhookPayload;

class DataNodeWHP extends FortifiWebhookPayload
{
  public $fid;
  public $id;
  public $displayName;
  public $description;
}
