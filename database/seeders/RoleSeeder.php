<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Roles')->insert([
            [
                'name' => 'Super Admin',
                'description' => 'Chủ shop',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
            ],
            [
                'name' => 'Admin',
                'description' => 'Quản trị viên',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null
            ]
        ]);
    }
}
