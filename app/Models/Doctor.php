<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['profile', 'name', 'short_bio', 'specialist', 'years_of_experience', 'email', 'phone', 'linked_in', 'department'])]
class Doctor extends Model
{
   
}
