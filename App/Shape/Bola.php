<?php

namespace App\Shape\Bola;
class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jarijari) {
        $this->jari_jari = $jarijari;
    }

    public function volume() : float {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}