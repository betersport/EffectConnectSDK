<?php

namespace EffectConnect\PHPSdk\Core\Model\Response;

use EffectConnect\PHPSdk\Core\Helper\Payload;

final class AttributeValue
{
    /**
     * @var mixed
     */
    private $_value;

    public function __construct($payload)
    {

        if ($payload === null) {
            return;
        }
        $this->_value = Payload::extract($payload, 'value');
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }
}
