<?php

namespace iBourgeois\Reach\Database\Factories;

use App\Models\User;
use iBourgeois\Reach\Models\ReachList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @template TModel of \Workbench\App\ReachList
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class ReachListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = ReachList::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'owner_id' => User::factory(),
        ];
    }
}
