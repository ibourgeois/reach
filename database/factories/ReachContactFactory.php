<?php

namespace iBourgeois\Reach\Database\Factories;

use iBourgeois\Reach\Models\ReachContact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @template TModel of \Workbench\App\ReachContact
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class ReachContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = ReachContact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'source' => fake()->randomElement(['website', 'app', 'api']),
            'status' => fake()->randomElement(['pending', 'subscribed', 'unsubscribed']),
            'notes' => [
                'note1' => fake()->sentence(),
                'note2' => fake()->sentence(),
            ],
        ];
    }
}
