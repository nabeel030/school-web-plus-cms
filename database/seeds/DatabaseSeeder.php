<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ParentsSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(CourseSeeder::class);

    }
}
