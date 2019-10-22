<?php

use Illuminate\Database\Seeder;
use App\SiteSetting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      SiteSetting::create([
        'address' => '75-A, Block 6,PECHS Karachi, 75300 Pakistan',
        'title' => 'My School',
        'phone' => '0300-0000000',
        'logo' => 'images/logo.jpeg',
        'email' => 'nabeelahmed030@gmail.com'
      ]);
    }
}
