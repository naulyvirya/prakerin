<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = "Admin2";
        $user->email = "admin2@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
