<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cabinServicesReq extends Model
{
    use HasFactory;
    protected $table="cabin_services_reqs";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["serviceRequested","residentName","emailId","apartmentNumber","status"];
}
