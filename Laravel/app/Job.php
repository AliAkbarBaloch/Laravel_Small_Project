<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Job extends Model
{
    //
    protected $fillable=['job_title','min_salary','max_salary'];
    public $timestamps=false;
}
