<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 25;
        // Create articles
        $tags = factory(App\Models\Articles::class, $count)->create();
        $this->command->info("Articles created.");
    }
}
