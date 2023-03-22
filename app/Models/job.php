<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['Title','ExpiryDate','Category','Salary','Skills','Description','Type','experience','company_id','status','EducationDegree','Education','isdeleted'];
    
    public function company(){
        return $this->belongsTo(User::class);
    }
    public function Jobseeker(){
        return $this->belongsToMany(User::class,'user_jobs');
    }
}
