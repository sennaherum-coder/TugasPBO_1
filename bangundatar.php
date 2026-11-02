<?php

class BangunDatar {

    // 1. PERSEGI
    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    public function diagonalPersegi($sisi) {
        return $sisi * sqrt(2);
    }


    // 2. PERSEGI PANJANG
    public function luasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    public function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    public function diagonalPersegiPanjang($panjang, $lebar) {
        return sqrt(pow($panjang, 2) + pow($lebar, 2));
    }


    // 3. LINGKARAN
    public function luasLingkaran($jariJari) {
        return pi() * pow($jariJari, 2);
    }

    public function kelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }

    public function diameterLingkaran($jariJari) {
        return 2 * $jariJari;
    }


    // 4. JAJAR GENJANG
    public function luasJajarGenjang($alas, $tinggi) {
        return $alas * $tinggi;
    }

    public function kelilingJajarGenjang($alas, $sisiMiring) {
        return 2 * ($alas + $sisiMiring);
    }


}
