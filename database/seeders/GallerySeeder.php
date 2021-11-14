<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Gallery;

class GallerySeeder extends Seeder
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
            'img' => '/images/course-1.jpg'
          ],
          [
            'img' => '/images/course-2.jpg'
          ],
          [
            'img' => '/images/course-3.jpg'
          ],
          [
            'img' => '/images/course-4.jpg'
          ],
          [
            'img' => '/images/course-1.jpg'
          ],
          [
            'img' => '/images/course-2.jpg'
          ],
          [
            'img' => '/images/course-3.jpg'
          ],
          [
            'img' => '/images/course-4.jpg'
          ]
        ];

        foreach($images as $img)
        {
          Gallery::create($img);
        }
    }
}
