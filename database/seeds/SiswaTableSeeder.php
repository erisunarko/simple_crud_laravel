<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
        	'nama'		=> 'eri sunarko',
        	'umur'		=> '28',
        	'alamat'	=> 'semarang'
        ]);
    }
}
