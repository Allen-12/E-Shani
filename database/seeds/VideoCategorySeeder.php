<?php

use App\VideoCategory;
use Illuminate\Database\Seeder;

class VideoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new VideoCategory();
        $category1->name = "Nature";
        $category1->save();

        $category2 = new VideoCategory();
        $category2->name = "Farming";
        $category2->save();
    }
}
