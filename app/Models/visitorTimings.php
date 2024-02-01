<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitorTimings extends Model
{
    use HasFactory;
    protected $table="visitor_timings";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","data"];
}
