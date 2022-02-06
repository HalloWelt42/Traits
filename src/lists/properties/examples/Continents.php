<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

use Hallowelt42\TypeArray\ListType;

class Continents extends ListType
{
    public function __construct()
    {
        parent::__construct(Continent::class);
    }

    /**
     * @param mixed $offset
     * @return Continent
     */
    public function offsetGet(mixed $offset): Continent
    {
        return parent::offsetGet(Continent::class);
    }

    /**
     * @return Continent
     */
    public function current(): Continent
    {
        return parent::current();
    }


}