<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'sikunubradley@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'sikunu',
                'email' => 'sikunubradley@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
