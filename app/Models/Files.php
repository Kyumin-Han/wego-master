<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    public function filePath() {
        // $path = '/storage/images/';
        $path = env('IMAGE_PATH', '/storage/images');
        $imageFile = $this->image ?? 'no_image_available.png';
        return $path.$imageFile;
    }

    protected $fillable = [
        'project_id',
        'file',
    ];
}
