<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = [
        [
            'name' => 'Oleg',
            'email' => 'Oleg.Okhrymenko@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
            'email_verified_at' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ],
        [
            'name' => 'Alexey',
            'email' => 'Alexey@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
            'email_verified_at' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ],

        [
            'name' => 'Shasha',
            'email' => 'Shasha@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
            'email_verified_at' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
        ],

        ];
        DB::table('users')->insert($insert);
    }
}


