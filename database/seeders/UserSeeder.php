<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name'     => 'Super Admin',
            'birthday' => '2001-01-01',
            'address'  => 'Địa chỉ',
            'gender'   => 1,
            'email'    => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'weight'   => 50,
            'height'   => 150,
        ]);
    }
}
