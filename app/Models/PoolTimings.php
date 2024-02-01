<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolTimings extends Model
{
    use HasFactory;
    protected $table="pool_timings";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","data"];
}
