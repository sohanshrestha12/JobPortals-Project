<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['email','password','name','category','city','phoneno','location','role','ProfileImg','google_id','Verify'];

    public function Job(){
        return $this->hasMany(Job::class);
    }

    public function Applyjobs(){
        return $this->belongsToMany(Job::class,'user_jobs');
    }
}
