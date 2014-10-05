<?php

/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 05/10/2014
 * Time: 19:35
 */
class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                '_id' => \Uuid::generate(),
                'nama' => 'Edi Santoso',
                'email' => 'edi@appdev.com',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate()
            ],
            [
                '_id' => \Uuid::generate(),
                'nama' => 'Iwan Riwayanto',
                'email' => 'iwan@appdev.com',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate()
            ]
        ];

        DB::table('users')->insert($users);
    }

}