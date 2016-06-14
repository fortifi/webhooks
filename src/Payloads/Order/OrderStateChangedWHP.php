<?php
namespace Fortifi\Webhooks\Payloads\Order;

class OrderStateChangedWHP extends OrderWHP
{
  public $oldState;
  public $newState;
}
