<?php
namespace Fortifi\Tests\Webhooks;

use Fortifi\Webhooks\Events\CustomerWHE;
use Fortifi\Webhooks\Events\InvoiceWHE;
use Fortifi\Webhooks\Payloads\Customer\CustomerCreatedWHP;
use Fortifi\Webhooks\Payloads\Invoice\InvoiceWHP;
use Fortifi\Webhooks\Webhooks;
use PHPUnit\Framework\TestCase;

class WebhooksTest extends TestCase
{
  public function testAll()
  {
    $all = Webhooks::all();

    $this->assertIsArray($all);
    $this->assertNotEmpty($all);
    $this->assertArrayHasKey(CustomerWHE::CREATED, $all);
    $this->assertEquals(CustomerCreatedWHP::class, $all[CustomerWHE::CREATED]);
  }

  public function testGetPayloadWithValidEvent()
  {
    $json = json_encode([
      'event' => CustomerWHE::CREATED,
      'sig'   => 'test-sig',
      'uuid'  => 'test-uuid',
      'rqid'  => 'test-rqid',
      'data'  => ['customerFid' => 'cust-123'],
    ]);

    $payload = Webhooks::getPayload($json);

    $this->assertInstanceOf(CustomerCreatedWHP::class, $payload);
    $this->assertEquals(CustomerWHE::CREATED, $payload->getEventType());
    $this->assertEquals('test-uuid', $payload->getPayloadId());
    $this->assertEquals('test-rqid', $payload->getRequestId());
  }

  public function testGetPayloadWithUnknownEvent()
  {
    $json = json_encode([
      'event' => 'unknown.event',
      'sig'   => 'test-sig',
      'uuid'  => 'test-uuid',
      'rqid'  => 'test-rqid',
      'data'  => [],
    ]);

    $payload = Webhooks::getPayload($json);

    $this->assertNull($payload);
  }

  public function testGetPayloadWithMissingEvent()
  {
    $json = json_encode([
      'sig'  => 'test-sig',
      'uuid' => 'test-uuid',
      'data' => [],
    ]);

    $payload = Webhooks::getPayload($json);

    $this->assertNull($payload);
  }

  public function testAllWithDisplayNames()
  {
    $displayNames = Webhooks::allWithDisplayNames();

    $this->assertIsArray($displayNames);
    $this->assertNotEmpty($displayNames);
    $this->assertCount(count(Webhooks::all()), $displayNames);

    foreach($displayNames as $name)
    {
      $this->assertIsString($name);
      $this->assertNotEmpty($name);
    }
  }

  public function testGetDisplayName()
  {
    $this->assertEquals('Customer Created', Webhooks::getDisplayName('customer.created'));
    $this->assertEquals('Customer Email Unsubscribed', Webhooks::getDisplayName('customer.email.unsubscribed'));
    $this->assertEquals('Invoice Add Payment', Webhooks::getDisplayName('invoice.add.payment'));
  }

  public function testGetDisplayNamePreservesCase()
  {
    $this->assertEquals('Test Event', Webhooks::getDisplayName('test.event'));
  }

  public function testAllEventsMapToValidClasses()
  {
    foreach(Webhooks::all() as $event => $class)
    {
      $this->assertTrue(class_exists($class), "Class $class for event $event does not exist");
    }
  }
}
