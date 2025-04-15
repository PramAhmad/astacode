<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'gender',
        'alamat',
        'telp',
        'linkedin',
        'github',
        'portfolio',
        'tentang',
        'cv',
        'status',
        'interview_date',
        'notes'
    ];

    protected $casts = [
        'interview_date' => 'datetime',
    ];

    /**
     * Get the job that the applicant applied for.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
