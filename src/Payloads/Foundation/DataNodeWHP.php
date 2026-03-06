<?php
namespace Fortifi\Webhooks\Payloads\Foundation;

use Fortifi\Webhooks\Payloads\FortifiWebhookPayload;

class DataNodeWHP extends FortifiWebhookPayload
{
  public $id;
  public $fid;
  public $displayName;
  public $description;
}
