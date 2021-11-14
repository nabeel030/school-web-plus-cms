<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $images = [
          [
          'img' => '/images/15681222732.jpg',
          'title' => 'This is some caption for Slider image!',
          ],
          [
          'img' => '/images/15681228823.jpg',
          'title' => 'This is some caption for Slider image!',
          ],
          [
            'img' =>'/images/15681229014.jpg',
            'title' => 'This is some caption for Slider image!',
          ]
        ];

        foreach($images as $images)
        {
            Slider::create($images);
        }
    }
}
