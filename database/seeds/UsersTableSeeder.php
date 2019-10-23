<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::updateOrCreate(
            [
                'email' => 'admin@admin.com'
            ],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
    }
}
