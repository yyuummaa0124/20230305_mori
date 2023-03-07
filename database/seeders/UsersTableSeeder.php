<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '笹木',
            'email' => 'aaa@aaa.com',
            'password' => 'aaa@aaa.com',
        ];
        User::create($param);
    }
}
