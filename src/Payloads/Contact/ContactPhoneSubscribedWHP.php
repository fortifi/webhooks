<?php
namespace Fortifi\Webhooks\Payloads\Contact;

use Fortifi\Webhooks\Payloads\Customer\CustomerWHP;

class ContactPhoneSubscribedWHP extends CustomerWHP
{
  public $phone;
  public $phoneFid;
}
