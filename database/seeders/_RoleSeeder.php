<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    protected $model = Role::class;
    protected $roles=[
            // tabla roles
            'guest',
            'user',
            'writer',
            'moderator',
            'admin',
            'super-admin',

        ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create roles and assign created permissions
        foreach ($this->roles as $key => $value) {
            $roles[]=  Role::create(['name'=>$value]);
        }
        return $roles;
    }
}
