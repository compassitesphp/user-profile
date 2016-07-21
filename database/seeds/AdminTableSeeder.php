<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' =>'Admin',
           'email'=>'admin@compassites.com',
           'password'=>bcrypt('admin@123')
        ]);

    }
}
