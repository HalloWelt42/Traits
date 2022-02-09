<?php

namespace Hallowetl42\Tlib\lists\functions\string\examples;

use Hallowetl42\Tlib\lists\functions\string\single_traits\TStringAddFluent;
use Hallowetl42\Tlib\lists\functions\string\single_traits\TStringSetFluent;
use Hallowetl42\Tlib\lists\functions\string\trait_collections\TExtendedStringOperations;
use Hallowetl42\Tlib\lists\functions\string\trait_collections\TPreDefinedStringOperations;
use Hallowetl42\Tlib\lists\functions\string\trait_collections\TWhitespaceCharacter;
use Hallowetl42\Tlib\lists\object_security\TSecurityPolicy_MagicGet;
use Hallowetl42\Tlib\lists\object_security\TSecurityPolicy_MagicSet;
use JsonSerializable;

class StringType implements JsonSerializable
{
    use TPreDefinedStringOperations;
    use TExtendedStringOperations;
    use TWhitespaceCharacter;
    use TSecurityPolicy_MagicGet;
    use TSecurityPolicy_MagicSet;
    use TStringSetFluent;
    use TStringAddFluent;

    /**
     * @var string
     */
    private string $str;


    /**
     * StringType constructor.
     * @param string $value
     */
    public function __construct(string $value = '')
    {
        $this->str = $value;
    }


    /**
     * implicit type conversion to string
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->str;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return string data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize(): string
    {
        return $this->str;
    }
}