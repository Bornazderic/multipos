<?php

use Illuminate\Database\Seeder;

class ArtiklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('distributeri_artikli')->insert([
            'sifra_art'=>  4,
            'dp'=>18,
            'eancode_art'=>1222345,
            'naziv' => Str::random(10),
            'jmj' => 'kg',
            'jmj2' => '1',
            'cijena1' => 1234,
            'cijena2' => 123345,
            'pdv' => 25,
            'slika' => 20,
        ]);
    }
}
