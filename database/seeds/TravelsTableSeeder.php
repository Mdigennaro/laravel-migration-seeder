<?php
use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) { 

            $new_travel = new Travel();
            $new_travel->packet_name = $faker->title();
            $new_travel->state = $faker->state();
            $new_travel->city = $faker->city();
            $new_travel->hotel_name = $faker->name();
            $new_travel->description = $faker->text(100);
            $new_travel->person = $faker->numberBetween(1,10);
            $new_travel->price = $faker->numberBetween(500, 10000);
            $new_travel->save();
            
        }
    }
}
