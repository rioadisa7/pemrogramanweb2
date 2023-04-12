<?php

class Bmi {
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat;
    public $tinggi;
  
    public function __construct($n, $u, $j, $b, $t) {
      $this->nama = $n;
      $this->umur = $u;
      $this->jenis_kelamin = $j;
      $this->berat = $b;
      $this->tinggi = $t;
    }

    public function hasilBMI() {
        $tinggi_badan = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_badan * $tinggi_badan);
        return ($bmi); 
        return number_format($bmi, 2);
    }

    public function statusBMI() {
        $bmi = $this->hasilBMI();
        if ($bmi <= 18.5) {
          return "Kekurangan Berat Badan";
        }elseif ($bmi >= 18.5 && $bmi <= 24.9) {
          return "Normal";
        }elseif ($bmi >= 25.0 && $bmi <= 29.9) {
          return "Kelebihan Berat Badan";
        }else {
          return "Obesitas";
        }
      }
    }

