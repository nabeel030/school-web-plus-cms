<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-1.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-2.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-3.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-4.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-3.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-2.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-4.jpg',
            'gender' => 'male'
          ],
          [
            'name' => 'Angelina Joulie',
            'subject' => 'English',
            'qualification' => 'BS (Computer Science)',
            'review' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
            'img' => '/images/teacher-3.jpg',
            'gender' => 'male'
          ]
        ];

        foreach($teacher as $teacher)
        {
          Teacher::create($teacher);
        }
    }
}
