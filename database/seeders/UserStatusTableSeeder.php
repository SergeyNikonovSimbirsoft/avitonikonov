<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Status;

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
        foreach ($statuses as $status_slug => $status_name) {
            $status = new Status();
            $status->created_at = Carbon::now();
            $status->updated_at = Carbon::now();
            $status->name = $status_name;
            $status->slug = $status_slug;
            $status->save();
        }
    }
}
