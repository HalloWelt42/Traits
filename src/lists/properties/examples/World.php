<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

use Hallowetl42\Tlib\lists\properties\TJsonSerialize_ClassNameWithoutNS;
use JsonSerializable;

class World implements JsonSerializable
{
    use TJsonSerialize_ClassNameWithoutNS;
    protected Continents $continents;

    public function __construct(Continents $continents)
    {
        $this->continents = $continents;
    }

}