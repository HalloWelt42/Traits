<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

use Hallowetl42\Tlib\lists\properties\TJsonSerialize_ClassNameWithoutNS;
use JsonSerializable;

class Country implements JsonSerializable
{
    use TJsonSerialize_ClassNameWithoutNS;
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->name = $name;
        return $this;
    }


}