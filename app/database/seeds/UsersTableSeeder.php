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
        DB::table('users')->truncate();
        $users = [
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Edi Santoso',
                'email' => 'edi@app.dev',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Iwan Riwayanto',
                'email' => 'iwan@appdev.com',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Faris Indra Kurniawan',
                'email' => 'faris@app.dev',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Putri Setyo Hartanti',
                'email' => 'putri_sh@appdev.com',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Angga',
                'email' => 'angga@app.dev',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Anggun',
                'email' => 'anjun@appdev.com',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Ega Firmansyah',
                'email' => 'e_gatot@app.dev',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ],
            [
                '_id' => \Uuid::generate(4),
                'nama' => 'Fahmi Alfarezha',
                'email' => 'cemplu@appdev.com',
                'password' => Hash::make('password'),
                'is_admin' => '1',
                'is_active' => '1',
                'organisasi_id' => \Uuid::generate(4)
            ]
        ];

        DB::table('users')->insert($users);
    }

}