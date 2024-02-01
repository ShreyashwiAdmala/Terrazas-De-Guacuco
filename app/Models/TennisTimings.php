<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TennisTimings extends Model
{
    use HasFactory;
    protected $table="tennis_timings";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","data"];
}
