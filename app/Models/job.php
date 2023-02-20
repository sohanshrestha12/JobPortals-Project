<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['Title','ExpiryDate','Category','Salary','Skills','Description','Type','experience','company_id','status','EducationDegree','Education'];
    
    public function company(){
        return $this->belongsTo(User::class);
    }
}
