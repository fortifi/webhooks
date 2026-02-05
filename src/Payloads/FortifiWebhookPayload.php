<?php
namespace Fortifi\Webhooks\Payloads;

use Packaged\Helpers\Objects;

abstract class FortifiWebhookPayload implements \JsonSerializable
{
  private $_event;
  private $_signature;
  private $_dataHash;
  private $_payloadId;
  private $_requestId;
  private $_timestamp;

  /**
   * @param string $event Event Name
   */
  final public function __construct($event)
  {
    $this->_event = $event;
    $this->_timestamp = time();
  }

  /**
   * (PHP 5 &gt;= 5.4.0)<br/>
   * Specify data which should be serialized to JSON
   *
   * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   *       which is a value of any type other than a resource.
   */
  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      'event'     => $this->_event,
      'sig'       => $this->_signature,
      'uuid'      => $this->_payloadId,
      'rqid'      => $this->_requestId,
      'timestamp' => $this->_timestamp,
      'data'      => Objects::propertyValues($this),
    ];
  }

  public function prepareForTransport($secret, $payloadId, $requestId)
  {
    $data = json_encode(Objects::propertyValues($this));
    $this->_dataHash = md5($data);
    $this->_signature = md5($secret . $this->_dataHash);
    $this->_payloadId = $payloadId;
    $this->_requestId = $requestId;
  }

  /**
   * Hydrate webhook payload based on json payload
   *
   * @param $json
   *
   * @return static
   */
  public static function hydrateFromJson($json)
  {
    $rawPayload = json_decode($json);
    $payload = new static(Objects::property($rawPayload, 'event'));

    $payload->_signature = Objects::property($rawPayload, 'sig');
    $payload->_payloadId = Objects::property($rawPayload, 'uuid');
    $payload->_requestId = Objects::property($rawPayload, 'rqid');

    $data = Objects::property($rawPayload, 'data', new \stdClass());
    $payload->_dataHash = md5(json_encode($rawPayload->data));
    foreach($payload as $key => $value)
    {
      $payload->$key = isset($data->$key) ? $data->$key : $value;
    }
    return $payload;
  }

  /**
   * The event type used to fire the webhook
   *
   * @return string
   */
  public function getEventType()
  {
    return $this->_event;
  }

  /**
   * Unique ID for this payload data
   *
   * N.B. This ID will remain the same for this request, throughout retries
   *
   * @return string
   */
  public function getPayloadId()
  {
    return $this->_payloadId;
  }

  /**
   * Unique ID for this request.
   *
   * N.B. This ID will differ for every request, e.g. retries on failed hooks
   *
   * @return string
   */
  public function getRequestId()
  {
    return $this->_requestId;
  }

  /**
   * Verify the payload against your secret
   *
   * @param $secret
   *
   * @return bool
   */
  public function verifyPayload($secret)
  {
    return md5($secret . $this->_dataHash) == $this->_signature;
  }
}
