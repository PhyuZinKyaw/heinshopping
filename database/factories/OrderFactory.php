<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vouncherno'=>$this->faker->ean8,
            'qty'=>$this->faker->numberBetween(1,100),
            'total'=>$this->faker->numberBetween(10000,90000),
            'paymentSlip'=>$this->faker->imageUrl,
            'payment_id'=>rand(1,10),
            'item_id'=>rand(1,10),
            'user_id'=>rand(1,10)
        ];
    }
}
