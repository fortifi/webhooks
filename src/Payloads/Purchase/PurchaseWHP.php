<?php
namespace Fortifi\Webhooks\Payloads\Purchase;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

class PurchaseWHP extends DataNodeWHP
{
  public $customerFid;
  public $productFid;
  public $productSkuFid;
  public $priceFid;

  public $currency;
  public $totalAmountUsd;
  public $exchangeRate;
}
