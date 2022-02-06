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
            $entities->$key = $val;
        }
        return [$this::class => $entities];
    }
}