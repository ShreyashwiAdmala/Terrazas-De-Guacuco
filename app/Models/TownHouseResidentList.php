<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TownHouseResidentList extends Model
{
    use HasFactory;
    protected $table="town_house_resident_lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["townHouseNumber","roomNumber","occupied","residentName","emailId","leaseStartDate","leaseEndDate"];

}
