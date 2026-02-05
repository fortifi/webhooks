<?php
namespace Fortifi\Tests\Webhooks\Payloads\Test;

use Fortifi\Webhooks\Payloads\Test\TestWHP;
use PHPUnit\Framework\TestCase;

class TestWHPTest extends TestCase
{
  public function testTransport()
  {
    $object = new TestWHP('transport.test');
    $object->message = 'Hello';
    $object->prepareForTransport('abc', '123-pld', 456);

    $json = json_encode($object);

    $decoded = TestWHP::hydrateFromJson($json);

    $this->assertEquals($decoded->message, $object->message);
    $this->assertEquals('transport.test', $decoded->getEventType());
    $this->assertEquals('123-pld', $decoded->getPayloadId());
    $this->assertTrue($decoded->verifyPayload('abc'));
    $this->assertFalse($decoded->verifyPayload('cba'));
    $this->assertEquals(456, $decoded->getRequestId());
  }
}
