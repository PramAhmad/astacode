<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'deadline',
        'type',
        'description',
        'title_desc',
        'criteria'
    ];
    
    protected $casts = [
        'deadline' => 'date',
        'criteria' => 'array'
    ];

    public function criterias()
    {
        return $this->hasMany(Criteria::class);
    }
}
