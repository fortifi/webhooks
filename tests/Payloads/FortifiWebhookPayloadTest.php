<?php
namespace Fortifi\Tests\Webhooks\Payloads;

use Fortifi\Webhooks\Payloads\FortifiWebhookPayload;
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
}
