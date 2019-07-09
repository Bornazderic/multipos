<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            'ptt' => Str::random(10),
            'adresa_kb' => Str::random(1),
            'oib' => Str::random(10),
            'tel' => Str::random(10),
            'fax' => Str::random(10),
            'mobitel' => Str::random(10),
            
            
        ])->save();
    
    }
}
