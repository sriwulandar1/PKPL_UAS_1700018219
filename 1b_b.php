<?php
class Prisma{
    
    
    public function luasPrisma($alas,$luasbidang){
        Echo "Luas Prisma adalah : ". 2*$alas+$sisi;
    }

    public function kelilingPrisma($sisi){
        Echo "Keliling Prisma adalah : ". 3*$sisi;
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih.';
    }

    public function hitung($pilihan, $sisi)
    {
        switch ($pilihan) {
            case 'luas':
                $this->luasPrisma($sisi);
                break;
            case 'keliling':
                $this->kelilingPrisma($sisi);
                break;
            default:
            $this->noChoice($sisi);
        }
    }
}

$sisi=25;
$pilihan = new Prisma;
$pilihan->hitung('keliling',$sisi);

?>