<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilesFactory extends Factory
{
    protected $projects = null;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function __construct()
    {
        parent::__construct();
        $this->projects = Project::all();
    }
    public function definition()
    {
        return [
            'project_id' => $this->projects->random()->id,
            'file' => $this->faker->sentence(),
        ];
    }
}
