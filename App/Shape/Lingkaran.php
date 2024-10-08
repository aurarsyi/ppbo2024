<?php

namespace App\Shape\Lingkaran;
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jarijari) {
        $this->jari_jari = $jarijari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}