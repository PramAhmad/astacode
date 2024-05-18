<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'client_name',
        "client_city",
        "description_project",
        "challenge",
        "description_result",
        "category_project_id"
    ];
    public function category_project()
    {
        return $this->belongsTo(CategoryProject::class);
    }
    public function images()
    {
        return $this->hasMany(ImageProject::class);
    }
    public function firstimage()
    {
        return $this->hasOne(ImageProject::class);
    }
}
