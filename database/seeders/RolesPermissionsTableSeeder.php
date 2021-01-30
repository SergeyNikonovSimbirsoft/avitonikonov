<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // создать связи между ролями и правами
        foreach (Role::all() as $role) {
            if ($role->slug == 'administrator') {
                foreach (Permission::all() as $perm) {
                    $role->permissions()->attach($perm->id);
                }
            }
            if ($role->slug == 'moderator') {
                $slugs = [
                    'manage-ads',
                    'personal-data-management',
                    'moderation-of-ads'
                ];
                foreach ($slugs as $slug) {
                    $perm = Permission::where('slug', $slug)->first();
                    $role->permissions()->attach($perm->id);
                }
            }
            if ($role->slug == 'user') {
                $slugs = ['manage-ads', 'personal-data-management'];
                foreach ($slugs as $slug) {
                    $perm = Permission::where('slug', $slug)->first();
                    $role->permissions()->attach($perm->id);
                }
            }
        }
    }
}
