<?php
namespace Fortifi\Webhooks\Payloads\Contact;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

abstract class AbstractContactPhoneWHP extends DataNodeWHP
{
  public $phone;
}
