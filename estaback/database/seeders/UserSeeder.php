<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table("autos")->insert([
            ["name"=>"admin","email"=>"admin@test","password"=>Hash::make(value: 123456)],
        ]);
    }
}
