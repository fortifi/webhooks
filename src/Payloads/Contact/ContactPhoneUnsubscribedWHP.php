<?php
namespace Fortifi\Webhooks\Payloads\Contact;

use Fortifi\Webhooks\Payloads\Customer\CustomerWHP;

class ContactPhoneUnsubscribedWHP extends CustomerWHP
{
  public $phone;
  public $phoneFid;
}
