<?php

namespace Praticante\Refactoring;

class Surfing
{
    protected $waves = [];

    public function getFirstWave()
    {
        if (count($this->waves) > 0) {
            if (!isset($this->waves[0])) {
                $exists = false;
                $firstWave = null;
                foreach ($this->waves as $wave) {
                    $exists = true;
                    $firstWave = $wave;
                    break;
                }

                if ($exists) {
                    return $wave;
                }
            }

            return $this->waves[0];
        }

        return -1;
    }
}
