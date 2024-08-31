<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidCase extends Model
{
    use HasFactory;
    protected $table = 'covid_cases';
    protected $fillable = ['cases' , 'report_date'];
    protected $dates = ['report_date'];
}
