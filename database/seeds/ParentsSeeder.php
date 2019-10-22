<?php

use Illuminate\Database\Seeder;
use App\Parents;

class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parents = [
          [
            'name' => 'John Wick',
            'relation' => 'Father',
            'review' => 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been.',
            'img' => '/images/teacher-1.jpg'
          ],
          [
            'name' => 'John Wick',
            'relation' => 'Father',
            'review' =>'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been.',
            'img' => '/images/teacher-2.jpg'
          ],
          [
            'name' => 'John Wick',
            'relation' => 'Father',
            'review' =>'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been.',
            'img' => '/images/teacher-3.jpg'
          ]
        ];

        foreach($parents as $parents)
        {
              Parents::create($parents);
        }
    }
}
