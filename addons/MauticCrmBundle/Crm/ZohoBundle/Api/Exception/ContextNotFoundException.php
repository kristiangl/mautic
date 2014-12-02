<?php

namespace MauticAddon\MauticCrmBundle\Crm\ZohoBundle\Api\Exception;

class ContextNotFoundException extends \Exception
{

    public function __construct($message = 'Context not found.', $code = 500, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}