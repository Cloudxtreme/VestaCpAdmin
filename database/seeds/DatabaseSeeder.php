<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Hélio',
            'email' => 'suporte@elicast.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
