<?php

namespace Hallowetl42\Tlib\lists\object_security;

use Exception;

trait TSecurityPolicy_MagicSet
{
    /**
     * @throws Exception
     */
    public function __set(string $name, $value): void
    {
        $class_name = __CLASS__;
        throw new Exception("Security Policy Error! '{$name}' name not declared in class '{$class_name}'!");
    }
}