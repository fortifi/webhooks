<?php
namespace Fortifi\Tests\Webhooks\Payloads;

use Fortifi\Webhooks\Payloads\FortifiWebhookPayload;
use Fortifi\Webhooks\Payloads\Test\TestWHP;
use PHPUnit\Framework\TestCase;

class FortifiWebhookPayloadTest extends TestCase
{
  public function testWebookPayload()
  {
    $payload = '{"event":"transport.test","sig":"1d05a5be237db9214b9af66a3275f41c","uuid":"123-pld","rqid":456,"data":[]}';

    $object = $this->getMockForAbstractClass(
      'Fortifi\Webhooks\Payloads\FortifiWebhookPayload',
      ['transport.test']
    );

    if($object instanceof FortifiWebhookPayload)
    {
      $object = $object->hydrateFromJson($payload);

      $this->assertEquals('transport.test', $object->getEventType());
      $this->assertEquals('123-pld', $object->getPayloadId());
      $this->assertTrue($object->verifyPayload('abc'));
      $this->assertFalse($object->verifyPayload('cba'));
      $this->assertEquals(456, $object->getRequestId());
    }
  }

  /**
   * Test that jsonSerialize works without deprecation in PHP 8+
   * Requires #[\ReturnTypeWillChange] attribute on jsonSerialize()
   */
  public function testJsonSerializeCompatibility()
  {
    $deprecation = null;
    set_error_handler(
      function($errno, $errstr) use (&$deprecation) {
        if(strpos($errstr, 'jsonSerialize') !== false)
        {
          $deprecation = $errstr;
        }
        return true;
      },
      E_DEPRECATED
    );

    try
    {
      $payload = new TestWHP('test.event');
      json_encode($payload);
    }
    finally
    {
      restore_error_handler();
    }

    $this->assertNull($deprecation, $deprecation ?? '');
  }
}
