<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @date 13/04/16 08:11
 */

namespace Phact\Orm\Fields;


class FloatField extends NumericField
{
    public $rawGet = true;

    public $rawSet = true;

    public function attributePrepareValue($value)
    {
        return isset($value) ? (float) $value : null;
    }

    public function getValue($aliasConfig = null)
    {
        return $this->_attribute;
    }

    public function dbPrepareValue($value)
    {
        return (float) $value;
    }

    public function getType()
    {
        return "float";
    }
}