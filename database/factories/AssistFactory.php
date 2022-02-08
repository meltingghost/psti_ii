<?php

namespace Database\Factories;

use App\Models\Assist;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AssistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'fecha' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'observacion' => $this->faker->sentence(),
            'employee_id' => Employee::all()->random()->id,
        ];
    }
}
