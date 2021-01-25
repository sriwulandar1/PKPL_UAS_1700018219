<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '011',
            'nama' => 'Muslihudin, S.T.,M.T.',
            'jabfung' => 'AA',
        ]);

        $this->assertEquals('011', $dosen->nipy);
        $this->assertEquals('Muslihudin, S.T.,M.T.', $dosen->nama);
        $this->assertEquals('AA', $dosen->jabfung);
        
    }
}
