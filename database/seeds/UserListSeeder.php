<?php
  
use Illuminate\Database\Seeder;
use App\Users;
   
class UserListSeeder extends Seeder
{

    public function run()
    {
        Users::create([
            'name' => 'Kathleen',
            'surname' => 'Jimenez',
            'email' => 'Kathleen.jimenez@gmail.com',
            'position' => 'Admin',
        ]);
        Users::create([
            'name' => 'Gwendolyn',
            'surname' => 'Myers',
            'email' => 'Gwendolyn.myers@gmail.com',
            'position' => 'Admin',
        ]);
        Users::create([
            'name' => 'Traci',
            'surname' => 'Robertson',
            'email' => 'Traci.robertson@gmail.com',
            'position' => 'Admin',
        ]);
        Users::create([
            'name' => 'Melvin',
            'surname' => 'Stewart',
            'email' => 'Melvin.stewart@gmail.com',
            'position' => 'Admin',
        ]);
    }
}