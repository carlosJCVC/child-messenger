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
                'name' => 'create writers',
            ],
            [
                'name' => 'read writers',
            ],
            [
                'name' => 'update writers',
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
