<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 30;
        // Create the tags
        $tags = factory(App\Models\Tags::class, $count)->create();
        $this->command->info("Tags created.");
    }
}
