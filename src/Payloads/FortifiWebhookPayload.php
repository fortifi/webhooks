<?php
namespace Fortifi\Webhooks\Payloads;

abstract class FortifiWebhookPayload
{
  private $_event;
  private $_signature;
  private $_dataHash;
  private $_payloadId;
  private $_requestId;

  /**
   * Hydrate webhook payload based on json payload
   *
   * @param $json
   *
   * @return static
   */
  public static function hydrateFromJson($json)
  {
    $payload = new static;
    $rawPayload = json_decode($json);

    $payload->_event = isset($rawPayload->event) ? $rawPayload->event : null;
    $payload->_signature = isset($rawPayload->sig) ? $rawPayload->sig : null;
    $payload->_payloadId = isset($rawPayload->uuid) ? $rawPayload->uuid : null;

    $data = isset($rawPayload->data) ? $rawPayload->data : new \stdClass();
    $payload->_dataHash = md5($rawPayload->data);
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
    return md5($secret, $this->_dataHash) == $this->_signature;
  }
}
