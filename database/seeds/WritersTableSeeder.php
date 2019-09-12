<?php

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WritersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writers = [
            [
                'name' => 'Bart',
                'lastname' => 'Simpson',
                'email' => 'bart@gmail.com',
                'password' => bcrypt('bartsimpson'),
                'remember_token' => '',
            ],
            [
                'name' => 'Homero',
                'lastname' => 'Simpson',
                'email' => 'homero@gmail.com',
                'password' => bcrypt('homerosimpson'),
                'remember_token' => '',
            ],
            [
                'name' => 'Armando',
                'lastname' => 'Barrera',
                'email' => 'armando@gmail.com',
                'password' => bcrypt('armando'),
                'remember_token' => '',
            ],
            [
                'name' => 'Flanders',
                'lastname' => 'fladers',
                'email' => 'flanders@gmail.com',
                'password' => bcrypt('flanders'),
                'remember_token' => '',
            ],
        ];

        foreach ($writers as $writer) {
            $writer = Writer::create($writer);
            //$user->assignRole(['Teacher']);
        }


    }
}
