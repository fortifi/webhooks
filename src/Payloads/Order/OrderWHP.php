<?php
namespace Fortifi\Webhooks\Payloads\Order;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class OrderWHP extends DataNodeWHP
{
  public $customerFid;
  public $orderHash;
  public $amount = 0; //Base Amount
  public $setupAmount = 0;
  public $taxAmount = 0;
  public $totalAmount = 0;
  public $amountPaid = 0;

  public $currency;
  public $usdAmount;
  public $exchangeRate;
}
