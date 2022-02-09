<?php

namespace Hallowetl42\Tlib\lists\functions\string\single_traits;

trait TStringSetFluent
{
    /**
     * Fluent setter
     *
     * @param string $value
     * @return $this
     */
    public function set(string $value): self
    {
        $this->str = $value;
        return $this;
    }
}