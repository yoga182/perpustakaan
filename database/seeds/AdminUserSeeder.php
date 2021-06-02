<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Perpustakaan',
            'email' => 'admin@perpus.com',
            'password' => bcrypt('11223344'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
