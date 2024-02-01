<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TownHouseServicesRequested extends Model
{
    use HasFactory;
    protected $table="town_house_services_requesteds";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["serviceRequested","residentName","emailId","apartmentNumber","status"];
}
