<?php

namespace Hallowetl42\Tlib\lists\properties;

/**
 * Gibt alle Felder einer Klasse zurück
 * Klassenname entspricht dem letzten Kind-Objekt ohne Namespace
 *
 */
trait TJsonSerialize_FullClassName
{
    public function jsonSerialize(): array
    {
        $entities = new class {
        };
        foreach ($this as $key => $val) {
            if(is_object($val)){
                $class_name = get_class($val);
                $entities->$class_name = $val;
                continue;
            }
            $entities->$key = $val;
        }
        return [$this::class => $entities];
    }
}