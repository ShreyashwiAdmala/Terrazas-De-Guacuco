<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenTimings extends Model
{
    use HasFactory;
    protected $table="garden_timings";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","data"];
}
