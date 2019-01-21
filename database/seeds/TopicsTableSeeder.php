<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 15;
        // Create the topics
        $tags = factory(App\Models\Topics::class, $count)->create();
        $this->command->info("Topics created.");
    }
}
