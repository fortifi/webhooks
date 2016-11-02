<?php
namespace Fortifi\Webhooks;

use Fortifi\Webhooks\Events\AdvertiserWHE;
use Fortifi\Webhooks\Events\CustomerWHE;
use Fortifi\Webhooks\Events\InvoiceWHE;
use Fortifi\Webhooks\Events\OrderWHE;
use Fortifi\Webhooks\Events\PaymentAccountWHE;
use Fortifi\Webhooks\Events\PaymentWHE;
use Fortifi\Webhooks\Events\PurchaseWHE;
use Fortifi\Webhooks\Payloads\Advertiser\AdvertiserCreatedWHP;
use Fortifi\Webhooks\Payloads\Advertiser\Campaign\AdvertiserCampaignCreatedWHP;
use Fortifi\Webhooks\Payloads\Customer\CustomerCreatedWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoiceWHP;
use Fortifi\Webhooks\Payloads\Order\OrderCreatedWHP;
use Fortifi\Webhooks\Payloads\Order\OrderStateChangedWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentCreatedWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountArchivedWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountCreatedWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountSetDefaultWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountUpdatedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseCreatedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchasePriceChangedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseRefundWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseStateChangedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseSubscriptionRenewWHP;
use Packaged\Helpers\Objects;

class Webhooks
{
  public static function getPayload($json)
  {
    $decoded = json_decode($json);
    $events = static::all();
    $event = Objects::property($decoded, 'event');
    if(isset($events[$event]))
    {
      return call_user_func([$events[$event], 'hydrateFromJson'], $json);
    }
    return null;
  }

  public static function all()
  {
    return [
      AdvertiserWHE::CREATED          => AdvertiserCreatedWHP::class,
      AdvertiserWHE::CAMPAIGN_CREATED => AdvertiserCampaignCreatedWHP::class,
      OrderWHE::CREATED               => OrderCreatedWHP::class,
      OrderWHE::STATE_CHANGE          => OrderStateChangedWHP::class,
      PaymentWHE::CREATED             => PaymentCreatedWHP::class,
      PurchaseWHE::CREATED            => PurchaseCreatedWHP::class,
      PurchaseWHE::STATE_CHANGE       => PurchaseStateChangedWHP::class,
      PurchaseWHE::PRICE_CHANGE       => PurchasePriceChangedWHP::class,
      PurchaseWHE::REFUNDED           => PurchaseRefundWHP::class,
      PurchaseWHE::SUBSCRIPTION_RENEW => PurchaseSubscriptionRenewWHP::class,
      PaymentAccountWHE::CREATED      => PaymentAccountCreatedWHP::class,
      PaymentAccountWHE::UPDATED      => PaymentAccountUpdatedWHP::class,
      PaymentAccountWHE::ARCHIVED     => PaymentAccountArchivedWHP::class,
      PaymentAccountWHE::SET_DEFAULT  => PaymentAccountSetDefaultWHP::class,
      CustomerWHE::CREATED            => CustomerCreatedWHP::class,
      InvoiceWHE::CREATED             => InvoiceWHP::class,
    ];
  }
}
