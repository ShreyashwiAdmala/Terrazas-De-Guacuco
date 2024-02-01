<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudioResidentList extends Model
{
    use HasFactory;
    protected $table="studio_resident_Lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["studioNumber","roomNumber","occupied","residentName","emailId","leaseStartDate","leaseEndDate"];
}
