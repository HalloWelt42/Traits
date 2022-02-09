<?php

namespace Hallowetl42\Tlib\lists\functions\string\single_traits;


trait TStringAddFluent
{
    /**
     * @param string $value
     * @return $this
     */
    public function add(string $value): self
    {
        $this->str .= $value;
        return $this;
    }
}