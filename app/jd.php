<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jd extends Model
{
   protected $fillable=['role','company','resp','qual', 'skill', 'deadline', 'sector'];
}
