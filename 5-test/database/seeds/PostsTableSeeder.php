<?php

use Illuminate\Database\Seeder;




class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
                'user_id'=> '5',
                'body'=> 'あ'
            ],
            [
                'user_id'=> '6',
                'body'=> 'い'
            ],
            [
                'user_id'=> '7',
                'body'=> 'あ'
            ],
        ]);

    }
}
