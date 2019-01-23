<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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

        #Enter admin entry first so you can login into dashbaord with admin role
        DB::table('users')->insert([
            'name'=> 'Muhammad Shahzad',
            'email' => 'admin@example.com',
            'role'=>'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);

        // How many genres you need, defaulting to 10
        //$count = (int)$this->command->ask('How many users do you need ?', 1);
        $count = 10;
        $this->command->info("Creating {$count} users.");
        $genres = factory(App\User::class, $count)->create();
    }
}
