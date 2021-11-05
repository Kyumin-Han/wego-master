<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Project_user;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Project_userFactory extends Factory
{
    protected $users = null;
    protected $projects = null;

    public function __construct()
    {
        parent::__construct();
        $this->users = User::all();
        $this->projects = Project::all();
    }

    protected $model = Project_user::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => $this->projects->random()->id,
            'user_id' => $this->users->random()->id,
        ];
    }
}
