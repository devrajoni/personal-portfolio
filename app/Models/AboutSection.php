<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutSection extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'experience_year',
        'experience_title',
        'description',
        'image',
        'total_client',
        'client_description',
        'total_project',
        'project_description',
    ];
}
