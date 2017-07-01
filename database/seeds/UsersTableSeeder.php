<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'is_teacher' => false,
        ]);

        User::create([
            'name' => 'Teacher 1',
            'email' => 'teacher@test.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
            'is_teacher' => true,
        ]);

        User::create([
            'name' => 'Student 1',
            'email' => 'student@test.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
            'is_teacher' => false,
        ]);
    }
}
