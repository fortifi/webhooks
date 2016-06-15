<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

class PurchaseStateChangedWHP extends PurchaseWHP
{
  public $oldState;
  public $newState;
}
