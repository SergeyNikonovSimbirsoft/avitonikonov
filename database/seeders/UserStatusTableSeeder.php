<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            "block" => "Blocked",
            "active" => "Active",
            "waiting" => "Waiting for email activation"
        ];
        foreach ($statuses as $slug => $status) {
            DB::table('user_statuses')->insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => $status,
                'slug' => $slug
            ]);
        }
    }
}
