<?php
namespace Fortifi\Webhooks\Payloads\Customer;

class CustomerMigratedWHP extends CustomerWHP
{
  public $fromPlatform; // e.g. stripe, braintree, etc.
  public $subscriptionIDs = []; // Platform Subscription ID > Subscription FID
  public $platformCustomerID; // The ID of the customer on the platform they were migrated from
}
