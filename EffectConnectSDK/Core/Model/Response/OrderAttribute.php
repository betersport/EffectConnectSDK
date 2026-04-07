<?php

namespace EffectConnect\PHPSdk\Core\Model\Response;

use EffectConnect\PHPSdk\Core\Helper\Payload;

final class OrderAttribute
{
    /**
     * @var string $_code
     */
    private $_code;
    /**
     * @var AttributeValue[]
     */
    private $_values;

    public function __construct($payload)
    {
        if ($payload === null) {
            return;
        }
        $this->_code = Payload::extract($payload, 'code');
        if (Payload::contains($payload, 'values'))
        {
            foreach (Payload::extract($payload, 'values', true) as $value)
            {
                $this->_values[] = new AttributeValue($value);
            }
        }
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * @return AttributeValue[]
     */
    public function getValues(){
        return $this->_values;
    }
}
