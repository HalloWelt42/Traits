<?php

namespace Hallowetl42\Tlib\lists\properties;

/**
 * Gibt alle Felder einer Klasse zurück.
 * Klassenname entspricht dem letzten Kind-Objekt ink. Namespace.
 *
 */
trait TJsonSerialize_ClassNameWithoutNS
{
    public function jsonSerialize(): array
    {
        $entities = new class {};

        foreach ($this as $key => $val) {
            if(is_object($val)){
                $class_name = get_class($val);
                $parts  = explode('\\', $class_name);
                $rename = $parts[count($parts) - 1];
                $entities->$rename = $val;
                continue;
            }
            $entities->$key = $val;
        }

        $name   = $this::class;
        $parts  = explode('\\', $name);
        $rename = $parts[count($parts) - 1];

        return [$rename => $entities];
    }
}