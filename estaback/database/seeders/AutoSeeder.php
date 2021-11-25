<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table("autos")->insert([
            ["placa"=>"ABC-1020","marca"=>"NISSAN","cliente_id"=>1],
            ["placa"=>"ABC-1030","marca"=>"TOYOTA","cliente_id"=>2],
            ["placa"=>"ABC-1040","marca"=>"SUSUKI","cliente_id"=>3],
        ]);
    }   
}
