<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageTimings extends Model
{
    use HasFactory;
    protected $table="manage_timings";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","location","schedule","shift"];
}
