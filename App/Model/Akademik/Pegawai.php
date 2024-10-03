<?php


namespace App\Model\Akademik;

class Pegawai {
    // Atribut
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    
    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    
    public function cekIn() {
        
        return true;
    }

    
    public function cekOut() {
        
        return true;
    }

    
    public function getNoHp() {
        return $this->no_hp;
    }

    
    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}


class TenagaKependidikan extends Pegawai {
    
    public $gaji_pokok;

    
    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    // Method cuti
    public function cuti() {
        // Implementasi logika cuti
        echo "{$this->nama} sedang cuti.";
    }
}


