<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

use Hallowelt42\TypeArray\ListType;

class Countries extends ListType
{
    public function __construct()
    {
        parent::__construct(Country::class);
    }

    /**
     * @param mixed $offset
     * @return Country
     */
    public function offsetGet(mixed $offset): Country
    {
        return parent::offsetGet(Country::class);
    }

    /**
     * @return Country
     */
    public function current(): Country
    {
        return parent::current();
    }


}