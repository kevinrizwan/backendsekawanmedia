<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = [
            [
                'name' => 'ini akun Admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'ini akun pengACC',
                'email' => 'timacc@timacc.com',
                'role' => 'timacc',
                'password' => bcrypt('123456'),
            ],
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
