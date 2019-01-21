<?php

use Illuminate\Database\Seeder;

class ArticlesImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        // Create articles images
        $tags = factory(App\Models\ArticlesImages::class, $count)->create();
        $this->command->info("Articles images created.");
    }
}
