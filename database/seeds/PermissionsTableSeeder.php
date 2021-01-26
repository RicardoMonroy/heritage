<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'dashboard.index']);
        Permission::create(['name' => 'blog.index']);
        Permission::create(['name' => 'blog.edit']);
        Permission::create(['name' => 'blog.show']);
        Permission::create(['name' => 'blog.create']);
        Permission::create(['name' => 'blog.destroy']);

        //Admin
        $admin = Role::create(['name' => 'Admin']);

        $admin->givePermissionTo([
            'dashboard.index',
            'blog.index',
            'blog.edit',
            'blog.show',
            'blog.create',
            'blog.destroy'
        ]);

        //Guest
        $guest = Role::create(['name' => 'Guest']);

        $guest->givePermissionTo([
            'blog.index',
            'blog.show'
        ]);

        //User Admin
        $user = User::find(1);
        $user->assignRole('Admin');
    }
}
