<?php
namespace Fortifi\Webhooks\Payloads\Employee;

use Fortifi\Webhooks\Payloads\Foundation\DataNodeWHP;

abstract class AbstractEmployeeWHP extends DataNodeWHP
{
  public $position;
  public $title;
  public $firstName;
  public $middleNames;
  public $lastName;
  public $emailFid;
  public $isDisabled;
  public $permissions;
  public $isAdmin;
}
