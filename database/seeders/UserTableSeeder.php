<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Role::where('slug', 'user')->first();
        $moderator = Role::where('slug', 'moderator')->first();
        $admin = Role::where('slug', 'administrator')->first();
        $manageAds = Permission::where('slug', 'manage-ads')->first();
        $managePersonal = Permission::where('slug', 'personal-data-management')->first();
        $manageUser = Permission::where('slug', 'user-management')->first();
        $manageModeration = Permission::where('slug', 'moderation-of-ads')->first();
        $manageDirectories = Permission::where('slug', 'directory-management')->first();
        $user1 = new User();
        $user1->created_at = Carbon::now();
        $user1->updated_at = Carbon::now();
        $user1->status_id = 3;
        $user1->name = "admin";
        $user1->surname = "";
        $user1->patronymic = "";
        $user1->email = "admin@admin.com";
        $user1->phone = "88888888888";
        $user1->password = bcrypt('admin');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->roles()->attach($user);
        $user1->roles()->attach($moderator);
        $user1->permissions()->attach($manageAds);
        $user1->permissions()->attach($managePersonal);
        $user1->permissions()->attach($manageUser);
        $user1->permissions()->attach($manageModeration);
        $user1->permissions()->attach($manageDirectories);
    }
}
