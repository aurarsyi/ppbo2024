<?php

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

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jarijari, $tinggi) {
        $this->jari_jari = $jarijari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jarijari, $tinggi) {
        $this->jari_jari = $jarijari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Contoh penggunaan
$lingkaran = new Lingkaran(4);
echo "Keliling lingkaran : " . $lingkaran->keliling() . " cm\n";
echo "Luas lingkaran : " . $lingkaran->luas() . " cm^2\n";

$bola = new Bola(4);
echo "Volume bola : " . $bola->volume() . " cm^3\n";

$tabung = new Tabung(4, 10);
echo "Volume tabung : " . $tabung->volume() . " cm^3\n";

$kerucut = new Kerucut(4, 10);
echo "Volume kerucut : " . $kerucut->volume() . " cm^3\n";

