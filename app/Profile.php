<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['name','lastname','gnsiat','madrak','aboutme','doreh'];
}
