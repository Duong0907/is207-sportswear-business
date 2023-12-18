<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert data into users table
        DB::table('users')->insert([
            ['username' => 'JohnDoe', 'password' => Hash::make('password123'), 'email' => 'john@example.com', 'phonenumber' => '1234567890', 'address' => '123 Main St', 'is_admin' => true],
            ['username' => 'JaneDoe', 'password' => Hash::make('pass456'), 'email' => 'jane@example.com', 'phonenumber' => '9876543210', 'address' => '456 Oak St', 'is_admin' => false],
            ['username' => 'BobSmith', 'password' => Hash::make('bobpass'), 'email' => 'bob@example.com', 'phonenumber' => '5551234567', 'address' => '789 Pine St', 'is_admin' => false],
            ['username' => 'AdminUser', 'password' => Hash::make('adminpass'), 'email' => 'admin@example.com', 'phonenumber' => '9998887777', 'address' => '456 Admin St', 'is_admin' => true],
            ['username' => 'AliceJohnson', 'password' => Hash::make('alicepass'), 'email' => 'alice@example.com', 'phonenumber' => '1112223333', 'address' => '789 Maple St', 'is_admin' => false],
            ['username' => 'CharlieBrown', 'password' => Hash::make('charliepass'), 'email' => 'charlie@example.com', 'phonenumber' => '4445556666', 'address' => '321 Cedar St', 'is_admin' => false],
            ['username' => 'EvaMartinez', 'password' => Hash::make('evapass'), 'email' => 'eva@example.com', 'phonenumber' => '7778889999', 'address' => '456 Birch St', 'is_admin' => false],
            ['username' => 'SamWilson', 'password' => Hash::make('sampass'), 'email' => 'sam@example.com', 'phonenumber' => '6667778888', 'address' => '987 Elm St', 'is_admin' => false],
            ['username' => 'LucyMiller', 'password' => Hash::make('lucypass'), 'email' => 'lucy@example.com', 'phonenumber' => '2223334444', 'address' => '654 Oak St', 'is_admin' => false],
            ['username' => 'MikeJohnson', 'password' => Hash::make('mikepass'), 'email' => 'mike@example.com', 'phonenumber' => '3334445555', 'address' => '789 Willow St', 'is_admin' => false],
            ['username' => 'admin2', 'password' => Hash::make('123'), 'email' => 'admin2@example.com', 'phonenumber' => '123', 'address' => '123', 'is_admin' => true],
        ]);
    }
}
