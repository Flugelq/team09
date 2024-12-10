<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    protected $table = "survey_statistics";

    protected $fillable = [
        'category',
        'subcategory',
        'sample_size',
        'very_satisfied_pct',
        'satisfied_pct',
        'neutral_pct',
        'dissatisfied_pct',
        'very_dissatisfied_pct'
    ];
}
