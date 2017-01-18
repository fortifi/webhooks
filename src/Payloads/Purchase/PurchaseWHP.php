<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PurchaseWHP extends DataNodeWHP
{
  public $customerFid;
  public $productFid;
  public $priceFid;

  public $currency;
  public $usdAmount;
  public $exchangeRate;
}
