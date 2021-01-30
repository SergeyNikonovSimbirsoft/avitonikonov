<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'manage-ads' => 'Manage ads',
            'personal-data-management' => 'Personal data management',
            'user-management' => 'User management',
            'moderation-of-ads' => 'Moderation of ads',
            'directory-management' => 'Working with directories'
        ];
        foreach ($permissions as $permission_slug => $name_permission) {
            $permission = new Permission();
            $permission->created_at = Carbon::now();
            $permission->updated_at = Carbon::now();
            $permission->name = $name_permission;
            $permission->slug = $permission_slug;
            $permission->save();
        }
    }
}
