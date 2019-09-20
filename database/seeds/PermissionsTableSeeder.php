<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'backend access',
            ],
            [
                'name' => 'list writers',
            ],
            [
                'name' => 'create writers',
            ],
            [
                'name' => 'edit writers',
            ],
            [
                'name' => 'delete writers',
            ],
        ];

        foreach ($permission as $permission) {
            Permission::create($permission);
        }
    }
}
