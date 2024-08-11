<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();
        Setting::create([
            'name' => 'AOC Blog',
            'logo' => '',
            'email' => 'adminaoc@example.com',
            'phone_number' => '+(62)812 3456 7890',
            'address' => 'Jl. ABC No. 123 RT 01 RW 02, Kota, Provinsi',
            'facebook' => 'https://facebook.com',
            'youtube' => 'https://youtube.com',
            'instagram' => 'https://instagram.com',
            'twitter' => 'https://twitter.com'
        ]);
    }
}
