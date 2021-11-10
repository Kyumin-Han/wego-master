<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_user extends Model
{
    use HasFactory;

    public function project() {
        return $this->belongsTo(Project::class);
    }

    protected $fillable = [
        'project_id',
        'user_id'
    ];
}
