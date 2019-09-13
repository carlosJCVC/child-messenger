<?php

use Illuminate\Database\Seeder;
use App\Models\Suscriptor;

class SuscriptorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $suscriptors = [
            [
                'name' => 'Bart',
                'lastname' => 'Simpson',
                'email' => 'bart@gmail.com',
                'ci' => '123456789',
                'city' => 'Cochamabab',
                'password' => bcrypt('bartsimpson'),
                'remember_token' => '',
            ],
            [
                'name' => 'Homero',
                'lastname' => 'Simpson',
                'email' => 'homero@gmail.com',
                'ci' => '123456789',
				'city' => 'Cochamabab',
                'password' => bcrypt('homerosimpson'),
                'remember_token' => '',
            ],
            [
                'name' => 'Armando',
                'lastname' => 'Barrera',
                'email' => 'armando@gmail.com',
				'city' => 'Cochamabab',
                'ci' => '123456789',
                'password' => bcrypt('armando'),
                'remember_token' => '',
            ],
            [
                'name' => 'Flanders',
                'lastname' => 'fladers',
                'ci' => '123456789',
                'email' => 'flanders@gmail.com',
				'city' => 'Cochamabab',
                'password' => bcrypt('flanders'),
                'remember_token' => '',
            ],
        ];

        foreach ($suscriptors as $suscriptor) {
            Suscriptor::create($suscriptor);
            //$user->assignRole(['Teacher']);
        }
    }
}
