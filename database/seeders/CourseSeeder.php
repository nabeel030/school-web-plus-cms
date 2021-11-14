<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
      $courses = [
         [
           'title' => 'Art Lesson',
           'description' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
           'img' => '/images/course-1.jpg'
         ],
         [
           'title' => 'Music Lesson',
           'description' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
           'img' => '/images/course-2.jpg'
         ],
         [
           'title' => 'Language Lesson',
           'description' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
           'img' => '/images/course-3.jpg'
         ],
         [
           'title' => 'Sports Lesson',
           'description' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country',
           'img' => '/images/course-4.jpg'
         ]
       ];

       foreach($courses as $course)
       {
         Course::create($course);
       }
    }
}
