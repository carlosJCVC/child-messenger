<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'administrator',
            ],
            [
                'name' => 'writer',
            ],
            [
                'name' => 'redactor',
            ],
            [
                'name' => 'suscriptor',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
