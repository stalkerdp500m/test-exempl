<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SimCard>
 */
class SimCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imei' => $this->faker->uuid(),
            'is_active' => $this->faker->boolean(),
            'account_id' => Account::get()->random(),
            'iccid' => $this->faker->uuid(),
            'notes' =>  $this->faker->text(25),
        ];
    }
}
