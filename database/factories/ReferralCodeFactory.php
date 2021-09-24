<?php

namespace Database\Factories;

use App\Models\ReferralCode;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReferralCodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReferralCode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'referral_code' => 'CACT'.mt_rand(1000, 9999),
        ];
    }
}
