<?php

namespace Hallowetl42\Tlib\lists\functions\string\examples;

class Main
{
    public function __construct()
    {
        $this->exampleMethodChaining();
    }

    public function exampleMethodChaining(){
        $str = new StringType();

        echo $str->set('Hallo')
            ->add(' ')
            ->add('World')
            ->add('!')
            ->add(PHP_EOL);
    }


    public function exampleStrinInString(){

        $str = new StringType('Test');
        $str->add(' gelungen!');
        $str_in_str = new StringType($str); // implizide Typenumwandlung vom StringType-Object $str
        print_r($str_in_str);

    }


    public function exampleObjectSecurity(){
        $str = new StringType();
//        $str->test = 'exploid';
//        print_r($str->test);
    }


}