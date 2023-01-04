<?php
namespace Fortifi\Webhooks;

use Fortifi\Webhooks\Events\AdvertiserWHE;
use Fortifi\Webhooks\Events\ChargebackWHE;
use Fortifi\Webhooks\Events\ContactWHE;
use Fortifi\Webhooks\Events\CustomerWHE;
use Fortifi\Webhooks\Events\EmployeeWHE;
use Fortifi\Webhooks\Events\InvoiceWHE;
use Fortifi\Webhooks\Events\OrderWHE;
use Fortifi\Webhooks\Events\PaymentAccountWHE;
use Fortifi\Webhooks\Events\PaymentWHE;
use Fortifi\Webhooks\Events\PurchaseWHE;
use Fortifi\Webhooks\Events\TransactionWHE;
use Fortifi\Webhooks\Payloads\Advertiser\AdvertiserCreatedWHP;
use Fortifi\Webhooks\Payloads\Advertiser\Campaign\AdvertiserCampaignCreatedWHP;
use Fortifi\Webhooks\Payloads\Chargeback\ChargebackActionWHP;
use Fortifi\Webhooks\Payloads\Chargeback\ChargebackWHP;
use Fortifi\Webhooks\Payloads\Contact\ContactPhoneWHP;
use Fortifi\Webhooks\Payloads\Customer\CustomerCreatedWHP;
use Fortifi\Webhooks\Payloads\Customer\CustomerEmailUnsubscribedWHP;
use Fortifi\Webhooks\Payloads\Customer\SubjectAccessRequestWHP;
use Fortifi\Webhooks\Payloads\Employee\EmployeeAuthWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoiceCreditWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoiceDisregardedWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoicePaidWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoiceTransactionWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoiceWHP;
use Fortifi\Webhooks\Payloads\Order\OrderCreatedWHP;
use Fortifi\Webhooks\Payloads\Order\OrderStateChangedWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentAuthorisationTransactionWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentChargebackWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentCreatedWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentFailedTransactionWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentMethodLockedWHP;
use Fortifi\Webhooks\Payloads\Payment\PaymentPaypalAgreementCancelledWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountArchivedWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountCreatedWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountSetDefaultWHP;
use Fortifi\Webhooks\Payloads\PaymentAccount\PaymentAccountUpdatedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseAutoChargeStateChangedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseCreatedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchasePriceChangedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseRefundWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseStateChangedWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseSubscriptionCancelWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseSubscriptionReEnableWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseSubscriptionRenewalPriceChangeWHP;
use Fortifi\Webhooks\Payloads\Purchase\PurchaseSubscriptionRenewWHP;
use Fortifi\Webhooks\Payloads\Transaction\TransactionFailedWHP;
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
      AdvertiserWHE::CAMPAIGN_CREATED                => AdvertiserCampaignCreatedWHP::class,
      AdvertiserWHE::CREATED                         => AdvertiserCreatedWHP::class,
      CustomerWHE::CREATED                           => CustomerCreatedWHP::class,
      CustomerWHE::EMAIL_UNSUBSCRIBED                => CustomerEmailUnsubscribedWHP::class,
      CustomerWHE::SUBJECT_ACCESS_REQUEST            => SubjectAccessRequestWHP::class,
      ContactWHE::PHONE_SUBSCRIBED                   => ContactPhoneWHP::class,
      ContactWHE::PHONE_UNSUBSCRIBED                 => ContactPhoneWHP::class,
      InvoiceWHE::CREATED                            => InvoiceWHP::class,
      InvoiceWHE::ADD_PAYMENT                        => InvoiceTransactionWHP::class,
      InvoiceWHE::ADD_REFUND                         => InvoiceTransactionWHP::class,
      InvoiceWHE::ADD_CREDIT                         => InvoiceCreditWHP::class,
      InvoiceWHE::DISREGARDED                        => InvoiceDisregardedWHP::class,
      InvoiceWHE::PAID                               => InvoicePaidWHP::class,
      OrderWHE::CREATED                              => OrderCreatedWHP::class,
      OrderWHE::STATE_CHANGE                         => OrderStateChangedWHP::class,
      PaymentAccountWHE::ARCHIVED                    => PaymentAccountArchivedWHP::class,
      PaymentAccountWHE::CREATED                     => PaymentAccountCreatedWHP::class,
      PaymentAccountWHE::SET_DEFAULT                 => PaymentAccountSetDefaultWHP::class,
      PaymentAccountWHE::UPDATED                     => PaymentAccountUpdatedWHP::class,
      PaymentWHE::CREATED                            => PaymentCreatedWHP::class,
      PaymentWHE::FAILED_TRANSACTION                 => PaymentFailedTransactionWHP::class,
      PaymentWHE::AUTHORISATION_TRANSACTION          => PaymentAuthorisationTransactionWHP::class,
      PaymentWHE::CHARGEBACK                         => PaymentChargebackWHP::class,
      PaymentWHE::AGREEMENT_CANCELLED                => PaymentPaypalAgreementCancelledWHP::class,
      PaymentWHE::PAYMENT_METHOD_LOCKED              => PaymentMethodLockedWHP::class,
      PurchaseWHE::CREATED                           => PurchaseCreatedWHP::class,
      PurchaseWHE::PRICE_CHANGE                      => PurchasePriceChangedWHP::class,
      PurchaseWHE::REFUNDED                          => PurchaseRefundWHP::class,
      PurchaseWHE::STATE_CHANGE                      => PurchaseStateChangedWHP::class,
      PurchaseWHE::SUBSCRIPTION_RENEW                => PurchaseSubscriptionRenewWHP::class,
      PurchaseWHE::SUBSCRIPTION_CANCEL               => PurchaseSubscriptionCancelWHP::class,
      PurchaseWHE::SUBSCRIPTION_RE_ENABLE            => PurchaseSubscriptionReEnableWHP::class,
      PurchaseWHE::SUBSCRIPTION_RENEWAL_PRICE_CHANGE => PurchaseSubscriptionRenewalPriceChangeWHP::class,
      PurchaseWHE::AUTO_CHARGE_STATE_UPDATED         => PurchaseAutoChargeStateChangedWHP::class,
      TransactionWHE::FAILED                         => TransactionFailedWHP::class,
      EmployeeWHE::AUTH                              => EmployeeAuthWHP::class,
      ChargebackWHE::CREATED                         => ChargebackWHP::class,
      ChargebackWHE::ACTIONED                        => ChargebackActionWHP::class,
    ];
  }

  public static function allWithDisplayNames()
  {
    $events = [];
    foreach(static::all() as $event => $class)
    {
      $events[] = static::getDisplayName($event);
    }
    return $events;
  }

  public static function getDisplayName($event)
  {
    switch($event)
    {
      default:
        $event = str_replace('.', ' ', $event);
        return ucwords($event);
    }
  }
}
