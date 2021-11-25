<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table("clientes")->insert([
            ["ci"=>"1020","nombre"=>"Juan lopez"],
            ["ci"=>"1030","nombre"=>"Maria Juarez"],
            ["ci"=>"1040","nombre"=>"Rene vargas"],
        ]);
    }
}
