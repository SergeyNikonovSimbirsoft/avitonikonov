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
        $user = new Role();
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->name = 'User';
        $user->slug = 'user';
        $user->save();
        $moderator = new Role();
        $moderator->created_at = Carbon::now();
        $moderator->updated_at = Carbon::now();
        $moderator->name = 'Moderator';
        $moderator->slug = 'moderator';
        $moderator->save();
        $administrator = new Role();
        $administrator->created_at = Carbon::now();
        $administrator->updated_at = Carbon::now();
        $administrator->name = 'Administrator';
        $administrator->slug = 'administrator';
        $administrator->save();
    }
}
