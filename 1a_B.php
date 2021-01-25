<?php
class Nilai
{
    function input_nilai($nilai)
    {
        if ($nilai == '76') {
            return TRUE;
        }
    }
    

    function main($nilai)
    {
        if ($this->input_nilai($nilai) == false) {
            return 'A';
        }else{
            return 'nilai lulus';
        }
        }
    }

$authentikasi = new Nilai;
$cek = $authentikasi->main('76');
echo $cek;