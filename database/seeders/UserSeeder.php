<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'player',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'address1' => '123 Street, California',
            'city' => 'Torrance',
            'state' => 'California',
            'postcode' => '12345',
            'password' => bcrypt('password'),
            'dob_day' => 1,
            'dob_month' => 12,
            'dob_year' => 2000,
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'role' => 'player',
            'first_name' => 'Jennifer',
            'last_name' => 'Santiago',
            'email' => 'jennifer@example.com',
            'phone' => '1653820392',
            'address1' => '123 Street, California',
            'city' => 'Torrance',
            'state' => 'California',
            'postcode' => '12345',
            'password' => bcrypt('password'),
            'dob_day' => 1,
            'dob_month' => 1,
            'dob_year' => 2000,
            'created_at' => now()->subDays(1),
        ]);

        DB::table('users')->insert([
            'role' => 'player',
            'first_name' => 'Solomon',
            'last_name' => 'Chris',
            'email' => 'solomon@example.com',
            'phone' => '6382019382',
            'address1' => '123 Street, California',
            'city' => 'Torrance',
            'state' => 'California',
            'postcode' => '12345',
            'password' => bcrypt('password'),
            'dob_day' => 1,
            'dob_month' => 12,
            'dob_year' => 1999,
            'created_at' => now()->subDays(2),
        ]);

        DB::table('users')->insert([
            'role' => 'player',
            'first_name' => 'Steven',
            'last_name' => 'Bernard',
            'email' => 'steven@example.com',
            'phone' => '6352019382',
            'address1' => '123 Street, California',
            'city' => 'Torrance',
            'state' => 'California',
            'postcode' => '12345',
            'password' => bcrypt('password'),
            'dob_day' => 17,
            'dob_month' => 6,
            'dob_year' => 1990,
            'created_at' => now()->subDays(3),
        ]);

        // Admin user
        DB::table('users')->insert([
            'role' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'phone' => '7827372982',
            'address1' => '123 Street, California',
            'city' => 'Torrance',
            'state' => 'California',
            'postcode' => '12345',
            'password' => bcrypt('password'),
            'dob_day' => 1,
            'dob_month' => 12,
            'dob_year' => 2000,
            'created_at' => now(),
        ]);

        // Super user
        DB::table('users')->insert([
            'role' => 'super',
            'first_name' => 'Super',
            'last_name' => 'User',
            'email' => 'super@example.com',
            'phone' => '7827372982',
            'address1' => '123 Street, California',
            'city' => 'Torrance',
            'state' => 'California',
            'postcode' => '12345',
            'password' => bcrypt('password'),
            'dob_day' => 1,
            'dob_month' => 12,
            'dob_year' => 2000,
            'created_at' => now(),
        ]);
    }
}
