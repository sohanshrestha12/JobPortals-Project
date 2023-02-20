<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['email','password','name','category','city','phoneno','location','role','ProfileImg'];

    public function Job(){
        return $this->hasMany(Job::class);
    }
}
