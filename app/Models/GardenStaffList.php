<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenStaffList extends Model
{
    use HasFactory;
    protected $table="garden_staff_lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","email","workerType","poolName","schedule"];
}
