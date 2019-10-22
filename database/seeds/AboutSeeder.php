<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
          'title' => 'Welcome to School',
          'description' => 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.

Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.',

          'experience' => 20,
          'stdcount' => 315,
          'success' => '90%'
        ]);
    }
}
