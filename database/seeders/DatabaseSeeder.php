<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'WARRATKP',
            'email' => 'WARRATKP@gmail.com',
            'password' => Hash::make('WARRATKP'),
            'no_hp' => '089506014176',
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'role'  => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('PoLBaNg@321'),
            'no_hp' => '089506014176',
            'created_at' => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);
    }
}
