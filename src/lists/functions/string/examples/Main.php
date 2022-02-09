<?php

namespace Hallowetl42\Tlib\lists\functions\string\examples;

class Main
{
    public function __construct()
    {
        $str = new StringType('Test');
        $str->add(' gelungen!');
        $str_in_str = new StringType($str); // implizide Typenumwandlung vom StringType-Object $str
        print_r($str_in_str);
    }
}