<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

class Main
{
    public function __construct()
    {

        $countries   = new Countries();
        $countries[] = new Country('Ägypten');
        $countries[] = new Country('Ghana');
        $countries[] = new Country('Kamerun');

        $continens   = new Continents();
        $continens[] = new Continent('Afrika', $countries);

        $countries   = new Countries();
        $countries[] = new Country('Detschland');
        $countries[] = new Country('Italien');
        $countries[] = new Country('Frankreich');

        $continens[] = new Continent('Europa', $countries);

        $world = new World($continens);

        print_r(
            json_encode($world,JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE)
        );


    }
}