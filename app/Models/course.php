<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CourseController;

class course extends Model
{
    use HasFactory;
    protected $table = 'course';
}
