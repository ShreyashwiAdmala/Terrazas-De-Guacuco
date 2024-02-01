<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TennisStaffList extends Model
{
    use HasFactory;
    protected $table="tennis_staff_lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","email","workerType","tennisName","schedule"];
}
