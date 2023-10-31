<?php
namespace Fortifi\Webhooks\Payloads\Messenger;

class MessengerBouncedWHP extends MessengerWHP
{
  public $type;
  public $reason;
  public $message;
}
