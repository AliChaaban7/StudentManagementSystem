<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'date_of_birth'];

    public function grades()
    {
       // return $this->hasMany(Grade::class);
    }
}
