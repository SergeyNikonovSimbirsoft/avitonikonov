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
        // Работа со своими объявлениями.
        $manageAds = new Permission();
        $manageAds->created_at = Carbon::now();
        $manageAds->updated_at = Carbon::now();
        $manageAds->name = 'Manage ads';
        $manageAds->slug = 'manage-ads';
        $manageAds->save();
        // Работа с личными данными.
        $managePersonal = new Permission();
        $managePersonal->created_at = Carbon::now();
        $managePersonal->updated_at = Carbon::now();
        $managePersonal->name = 'Personal data management';
        $managePersonal->slug = 'personal-data-management';
        $managePersonal->save();
        // Работа с пользователями.
        $manageUser = new Permission();
        $manageUser->created_at = Carbon::now();
        $manageUser->updated_at = Carbon::now();
        $manageUser->name = 'User management';
        $manageUser->slug = 'user-management';
        $manageUser->save();
        // Модерация объявлений.
        $manageModeration = new Permission();
        $manageModeration->created_at = Carbon::now();
        $manageModeration->updated_at = Carbon::now();
        $manageModeration->name = 'Moderation of ads';
        $manageModeration->slug = 'moderation-of-ads';
        $manageModeration->save();
        // Работа со справочниками.
        $manageDirectories = new Permission();
        $manageDirectories->created_at = Carbon::now();
        $manageDirectories->updated_at = Carbon::now();
        $manageDirectories->name = 'Working with directories';
        $manageDirectories->slug = 'directory-management';
        $manageDirectories->save();
    }
}
