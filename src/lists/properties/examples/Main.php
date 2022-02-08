<?php

namespace Hallowetl42\Tlib\lists\properties\examples;

class Main
{
    public function __construct()
    {

        // definition
        $continents        = new Continents();
        $african_countries = new Countries();
        $europe_countries  = new Countries();

        $african_countries[] = new Country('Ägypten');
        $african_countries[] = new Country('Ghana');
        $african_countries[] = new Country('Kamerun');

        $europe_countries[] = new Country('Deutschland');
        $europe_countries[] = new Country('Italien');
        $europe_countries[] = new Country('Frankreich');

        $continents[] = new Continent('Afrika', $african_countries);
        $continents[] = new Continent('Europa', $europe_countries);

        $world = new World($continents);

        // output
        print_r(
            json_encode($world, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE)
        );


    }
}