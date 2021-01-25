<?php

interface Prisma{
    public function hitung($alas, $tinggi, $luasbidang, $sisi);
}

    
class luas implements Prisma{
    public function hitung($alas, $tinggi, $luasbidang, $sisi){
        $dua=2;
        $hasil = $dua * $alas + $luasbidang;
        Echo "Luas Prisma adalah : ". $hasil;
    }
}
   


class keliling implements Prisma{
    public function hitung($alas, $tinggi, $luasbidang, $sisi){  
        $hasil =3*$sisi;
        Echo "Keliling Prisma adalah : ". $hasil;
    }
    
}

    class hitung
    {
        public static function pilihan($pilihan){
        switch ($pilihan) {
            case 'luas':
                return new luas;
                break;
            case 'keliling':
                return new keliling;
                break;
            default:
                return FALSE;
        }
    }
}

$sisi=25;
$alas=30;
$luasbidang=10;
hitung::pilihan('luas')->hitung($alas, $tinggi, $luasbidang, $sisi);
echo '<br>';
hitung::pilihan('keliling')->hitung($alas, $tinggi, $luasbidang, $sisi);

?>