<?php

namespace EffectConnect\PHPSdk\Core\Model\Response;

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
        $this->_value = $payload;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }
}
