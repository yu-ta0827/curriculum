<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
            'name'=> '怪盗MO',
            'email'=> 'kaitou1@gmail',
            'password'=> Hash::make('hoge1')
            ],
            [
            'name'=> '怪盗ATK',
            'email'=> 'kaitou2@gmail',
            'password'=> Hash::make('hoge2')
            ],
            [
            'name'=> '怪盗HRM',
            'email'=> 'kaitou3@gmail',
            'password'=> Hash::make('hoge3')
            ],
        ]);
    }
}
