<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $users = null;
    protected $projects = null;

    public function __construct()
    {
        parent::__construct();
        $this->users = User::all();
        $this->projects = Project::all();
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Project::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'user_id' => $this->users->random()->id,
            'outline' => $this->faker->sentence(),
            'explanation' => $this->faker->sentence(),
        ];
    }
}
