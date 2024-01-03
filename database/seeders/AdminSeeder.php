<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {

        Admin::create([
            'username' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => '123',
            'is_active' => 1
        ]);
    }
}
