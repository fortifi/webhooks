<?php
namespace Fortifi\Webhooks\Payloads\Order;

class OrderCreatedWHP extends OrderWHP
{
  public $currency;
  public $country;
}
