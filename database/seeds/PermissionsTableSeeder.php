<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        $permissions = [
            [ 'name' => 'list users' ],
            [ 'name' => 'create users' ],
            [ 'name' => 'edit users' ],
            [ 'name' => 'delete users' ],

            [ 'name' => 'list roles' ],
            [ 'name' => 'create roles' ],
            [ 'name' => 'edit roles' ],
            [ 'name' => 'delete roles' ],

            [ 'name' => 'list writers' ],
            [ 'name' => 'create writers' ],
            [ 'name' => 'edit writers' ],
            [ 'name' => 'delete writers' ],

            [ 'name' => 'list redactors' ],
            [ 'name' => 'create redactors' ],
            [ 'name' => 'edit redactors' ],
            [ 'name' => 'delete redactors' ],

            [ 'name' => 'list suscriptors' ],
            [ 'name' => 'create suscriptors' ],
            [ 'name' => 'edit suscriptors' ],
            [ 'name' => 'delete suscriptors' ],

            [ 'name' => 'list areas' ],
            [ 'name' => 'create areas' ],
            [ 'name' => 'edit areas' ],
            [ 'name' => 'delete areas' ],

            [ 'name' => 'list letters' ],
            [ 'name' => 'create letters' ],
            [ 'name' => 'show letters' ],
            [ 'name' => 'edit letters' ],
            [ 'name' => 'delete letters' ],

            [ 'name' => 'list articles' ],
            [ 'name' => 'create articles' ],
            [ 'name' => 'show articles' ],
            [ 'name' => 'edit articles' ],
            [ 'name' => 'delete articles' ],

            [ 'name' => 'list releases' ],
            [ 'name' => 'create releases' ],
            [ 'name' => 'show releases' ],
            [ 'name' => 'edit releases' ],
            [ 'name' => 'delete releases' ],
            
            [ 'name' => 'train machine' ],
        ];

        
        $admin = Role::find(1);
        //$writer = Role::where('name', 'writer')->first();
        //$redactor = Role::where('name', 'redactor')->first();
        
        foreach ($permissions as $permission) {
            Permission::create($permission);
            $admin->givePermissionTo($permission);
        }
    }
}
