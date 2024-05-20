<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['jabatan_id','name','about','facebook','instagram','linkedin','twitter','photo'];


    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function skillmember()
    {
        return $this->hasMany(SkillMember::class);
    }
    public function education()
    {
        return $this->hasMany(EducationMember::class);
    }
}


