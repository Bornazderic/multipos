<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributeri')->insert([
            'naziv' => Str::random(10),
            'user_id'=>1,
            'adresa' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'ptt' => 16,
            'adresa_kb' => 20,
            'oib' => 13324765,
            'tel' => 12355,
            'fax' => 125161,
            'mobitel' => 162
            
            
        ]);
    
    }
}
