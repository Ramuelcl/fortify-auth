<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    protected $model = Permission::class;
    protected $permissions=[
            // tabla permisos
            'access',
            'view',
            'new',
            'edit',
            'delete',
            'publish',
            'unpublish',
            'printer',
            'export',
        ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        foreach ($this->permissions as $key => $value) {
            $permissions[]=Permission::create(['name'=>$value]);
        }
        return $permissions;
    }
}
