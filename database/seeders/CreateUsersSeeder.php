<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'admin',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('admin123'),
            ],
            [
               'name'=>'abiyyu',
               'email'=>'abiyyu@gmail.com',
               'type'=>0,
               'password'=> bcrypt('abiyyu123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
