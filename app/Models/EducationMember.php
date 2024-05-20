<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationMember extends Model
{
    use HasFactory;
    protected $fillable = ['member_id','name','from','to','degree','description'];
}
