<?php

namespace Database\Factories;

use App\Models\Renters;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RentersFactory extends Factory
{
    protected $model = Renters::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'app'=>$this->faker->lastname,
            'apm'=>$this->faker->lastname,
            'id_apartment'=>$this->faker->numberBetween(1,10),
            'arrival_date'=>$this->faker->datetime(),
            'id_status_renter'=>$this->faker->numberBetween(1,3),
            'email'=>$this->faker->email
        ];
    }
}
