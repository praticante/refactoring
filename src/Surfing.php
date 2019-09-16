<?php

namespace Praticante\Refactoring;

class Surfing
{
    protected $waves = [];

    public function getFirstWave()
    {
        if (count($waves) > 0) {
            if (!isset($waves[0])) {
                $exists = false;
                $firstWave = null;
                foreach ($waves as $wave) {
                    $exists = true;
                    $firstWave = $wave;
                }

                if ($exists) {
                    return $wave;
                }
            }

            return $waves[0];
        }

        return -1;
    }
}
