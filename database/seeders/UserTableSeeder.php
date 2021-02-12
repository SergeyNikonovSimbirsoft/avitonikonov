<?php

namespace Database\Seeders;

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
        $user1 = new User();
        $user1->created_at = Carbon::now();
        $user1->updated_at = Carbon::now();
        $user1->email_verified_at = Carbon::now();
        $user1->status_id = 2;
        $user1->name = 'admin';
        $user1->surname = '';
        $user1->patronymic = '';
        $user1->email = 'admin@admin.com';
        $user1->phone = '88888888888';
        $user1->password = bcrypt('admin');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->roles()->attach($user);
        $user1->roles()->attach($moderator);
    }
}
