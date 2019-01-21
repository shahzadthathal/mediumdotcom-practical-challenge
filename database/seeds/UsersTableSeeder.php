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

        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);*/

        // How many genres you need, defaulting to 10
        //$count = (int)$this->command->ask('How many users do you need ?', 1);
        $count = 1;
        $this->command->info("Creating {$count} users.");
        $genres = factory(App\User::class, $count)->create();
    }
}
