<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'user' => 'User',
            'moderator' => 'Moderator',
            'administrator' => 'Administrator'
        ];
        foreach ($roles as $role_slug => $role_name) {
            $role = new Role();
            $role->created_at = Carbon::now();
            $role->updated_at = Carbon::now();
            $role->name = $role_name;
            $role->slug = $role_slug;
            $role->save();
        }
    }
}
