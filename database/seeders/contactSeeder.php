<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('connects')->insert([
            'email'     => 'auto-wash@gmail.com',
            'worktime'      => '18h',
            'open_at'      => '1',
            'close_at'      => '4',
            'twlinke'      => 'https://twitter.com/',
            'whats'      => '+966955551',
            'inslinke'      => 'https://www.instagram.com/',

        ]);
    }
}
