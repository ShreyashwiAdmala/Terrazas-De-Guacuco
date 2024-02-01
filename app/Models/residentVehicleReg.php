<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class residentVehicleReg extends Model
{
    use HasFactory;
    protected $table="resident_vehicle_regs";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","make","model","licensePlate"];
}
