<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinResidentList extends Model
{
    use HasFactory;
    protected $table="cabin_resident_Lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["cabinNumber","roomNumber","occupied","residentName","emailId","leaseStartDate","leaseEndDate"];
}
