<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'outline',
        'explanation',
    ];

    public function participants() {
        // return $this->belongsToMany(User::class);

        return $this->belongsToMany(User::class, 'project_users', 'project_id', 'user_id', 'id', 'id', 'users');
        
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
