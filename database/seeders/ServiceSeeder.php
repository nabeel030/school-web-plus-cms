<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $services = [
          [
            'title' => 'Regular Classes',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
          ],
          [
            'title' => 'Safety First',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
          ],
          [
            'title' => 'Certified Teachers',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
          ],
          [
            'title' => 'Sufficient Classrooms',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
          ],
          [
            'title' => 'Creative Lessons',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
          ],
          [
            'title' => 'Sports Facilities',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia.'
          ]
        ];

        foreach($services as $services)
        {
            Service::create($services);
        }
    }
}
