<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $table="registers";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","role","emailId","password"];
}
