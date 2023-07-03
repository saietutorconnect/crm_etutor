<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $gurded=['id'];
    protected $table='studycrm_student_accounts';
    function documents() {
        return $this->hasMany(StudentDocument::class,'user_id','id');
    }
}
