<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

use Hallowetl42\Tlib\lists\properties\TJsonSerialize_ClassNameWithoutNS;
use JsonSerializable;

class Continent implements JsonSerializable
{
    use TJsonSerialize_ClassNameWithoutNS;

    private string    $name;
    private Countries $countries;

    public function __construct(string $name, Countries $countries)
    {
        $this->name      = $name;
        $this->countries = $countries;
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
     * @return Continent
     */
    public function setName(string $name): Continent
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Countries
     */
    public function getCountries(): Countries
    {
        return $this->countries;
    }

    /**
     * @param Countries $countries
     * @return Continent
     */
    public function setCountries(Countries $countries): Continent
    {
        $this->countries = $countries;
        return $this;
    }



}