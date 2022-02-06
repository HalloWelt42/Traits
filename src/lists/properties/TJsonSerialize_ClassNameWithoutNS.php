<?php

namespace Hallowetl42\Tlib\lists\properties;

/**
 * Gibt alle Felder einer Klasse zurück
 * Klassenname entspricht dem letzten Kind-Objekt inkl. Namespace
 *
 */
trait TJsonSerialize_ClassNameWithoutNS
{
    public function jsonSerialize(): array
    {
        $entities = new class {};

        foreach ($this as $key => $val) {
            $entities->$key = $val;
        }

        $name   = $this::class;
        $parts  = explode('\\', $name);
        $rename = $parts[count($parts) - 1];

        return [$rename => $entities];
    }
}