<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Nabeel Ahmed',
          'email' => 'nabeelahmed030@gmail.com',
          'password' => bcrypt('password')
        ]);
    }
}
