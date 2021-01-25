<?php

class Latihan
{
    private $DISKON = 50000;
 
    /**
     * Memilah elemen array yang layak dapat diskon sesuai kriteria yang diterapkan pada function strukDiskon
     * Parameter: $arrBelanjaan
     * Return: array 
     */

    function filterStrukYangLayakDapatDiskon($arrBelanjaan)
    {
        return array_filter($arrBelanjaan, array($this, "strukDiskon"));

    }
    function jumlahDiskon()
    {
        $jumlahdiskon = $this->$arrBelanjaan * ($this->DISKON);
        return ($this -> $arrBelanjaan - $jumlahdiskon);
    }
} 
    /**
     * Rule pemilahan elemen array yang layak dapat diskon
     * Parameter: $arrBelanjaan
     * Return: array
     */
    function strukDiskon($arrBelanjaan)
    {
        if ($arrBelanjaan["jumlahBelanja"] > $this->DISKON) {
            return $arrBelanjaan;
        }
    }

 
$arrBelanjaan = array(
    array("nomorStruk" => 1, "jumlahBelanja" => 77400),
    array("nomorStruk" => 2, "jumlahBelanja" => 19000),
    array("nomorStruk" => 3, "jumlahBelanja" => 49890),
    array("nomorStruk" => 4, "jumlahBelanja" => 109000),
    array("nomorStruk" => 5, "jumlahBelanja" => 56000),
);
$coba = new Latihan;
print_r($coba->filterStrukYangLayakDapatDiskon($arrBelanjaan));
print_r($coba->jumlahDiskon($jumlahdiskon));