<?php

namespace Praticante\Refactoring;

class Parrot
{
    protected $flyPlan = [];

    public function setupFlyPlan($flys)
    {
        foreach ($flys as $fly) {
            $flyCode = substr(strtoupper($fly), 0, 3);
            $flyPlaces = explode(',', $fly);
            $flySpecial = strlen($fly) > 20;

            $this->flyPlan[] = $flyCode . ':' . $flyPlaces[1] . '->' . $flyPlaces[2] . ($flySpecial ? '(S)' : '');
        }
    }
}
