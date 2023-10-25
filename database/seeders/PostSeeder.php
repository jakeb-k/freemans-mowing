<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => "Precision Pruning, Mowing, and Weed Removal for a Pristine Lawn",
            'date' => '18th of October',
            'review'=>'Outstanding job! The lawn care teams attention to detail in pruning our hedges, mowing the lawn, and getting rid of those stubborn weeds truly transformed our yard. It looks immaculate.',
            'description' => 'The lawn care team meticulously pruned overgrown hedges and shrubs, ensuring they maintained a well-manicured appearance. They then expertly mowed the entire lawn to a consistent and proper height. To enhance the lawns health and aesthetics, they diligently removed any invasive weeds and ensured the edges were neatly trimmed for a polished look',
            'images'=>'mowgo.png,blogo.png' 
        ]);
        DB::table('posts')->insert([
            'title' => "Tree Trimming, Grass Fertilization, and Sidewalk Edging Excellence",
            'date' => '8th of October',
            'review'=>'I am beyond pleased with the tree trimming, grass fertilization, and sidewalk edging done by this lawn care service. My lawn has never looked this healthy and well-maintained. Highly recommended!',
            'description' => 'The lawn care professionals skillfully trimmed and shaped trees to promote healthy growth and remove any dead or overhanging branches. They applied a tailored fertilizer to the grass, promoting lush and green growth. Sidewalks and walkways were meticulously edged to create clean, defined borders, enhancing the overall curb appeal of the property.',
            'images'=>'mowgo.png,blogo.png' 
        ]);
        DB::table('posts')->insert([
            'title' => "Seasonal Leaf Cleanup, Soil Aeration, and Mulch Magic",
            'date' => '30th of September',
            'review'=>'I could not be happier with the leaf cleanup, soil aeration, and mulch application. The garden looks cleaner and more vibrant than ever. Thank you for your thorough work!',
            'description' => 'The lawn care crew performed a thorough cleanup of fallen leaves and debris, leaving the landscape spotless. Soil aeration was carried out to improve root health and nutrient absorption for the grass. In addition, they applied a fresh layer of mulch to flower beds and garden areas, providing moisture retention and a polished look.',
            'images'=>'mowgo.png,blogo.png' 
        ]);
        DB::table('posts')->insert([
            'title' => "Efficient Sprinkler Installation, Shrub Planting, and Sodding Transformation",
            'date' => "24th of September",
            'review'=>"The sprinkler system installation, shrub planting, and sodding job was exceptional. Our lawn is now the envy of the neighborhood. These professionals really know their stuff!",
            'description' => "The lawn care team executed a comprehensive job that involved installing a state-of-the-art sprinkler system to ensure efficient and consistent watering. They carefully planted new shrubs, taking into account sunlight and soil conditions for optimal growth. To provide an instant, lush lawn, they laid fresh sod, transforming the yard's appearance.",
            'images'=> "mowgo.png,blogo.png" 
        ]);
        DB::table('posts')->insert([
            'title' => "Debris Raking, Pest Control, and Flower Bed Elegance Maintenance",
            'date' => "16th of September",
            'review'=>"Kudos to the lawn care team for their dedication in raking debris, pest control, and flower bed maintenance. Our garden is now a haven of beauty and tranquility. Fantastic work!",
            'description' => "The dedicated lawn care experts raked and removed any debris, such as fallen branches, leaves, and litter, keeping the outdoor space clean and appealing. To safeguard the garden from pests, they applied a targeted pest control treatment, ensuring the health of plants and flowers. Additionally, they maintained flower beds, keeping them well-groomed and weed-free for a vibrant garden.",
            'images'=> "mowgo.png,blogo.png" 
        ]);
    }
}
