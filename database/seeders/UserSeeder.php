<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Generator as Faker;

class UtenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1;$i<11;$i++){
            $user = new User();

            $user->name = $faker->sentence(3);
            $user->email = $faker->text(50);

            $user->save();

        }
    }
}
