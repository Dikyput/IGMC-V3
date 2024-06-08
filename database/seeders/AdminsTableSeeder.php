<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Sule',
                'email' => 'sule@igmcv3.com',
                'password' => Hash::make('#D4ng3r1411'),
            ],
            [
                'name' => 'Irfan Effendi',
                'email' => 'donluis@igmcv3.com',
                'password' => Hash::make('amir230620'),
            ],
            [
                'name' => 'Rey',
                'email' => 'rayhnmlna@igmcv3.com',
                'password' => Hash::make('rey@igmcv3'),
            ],
            [
                'name' => 'Kid',
                'email' => 'kid@igmcv3.com',
                'password' => Hash::make('kidigmc@igmcv3'),
            ],
        ]);
    }
}
