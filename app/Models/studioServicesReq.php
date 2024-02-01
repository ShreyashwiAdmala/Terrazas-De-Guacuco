<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studioServicesReq extends Model
{
    use HasFactory;
    protected $table="studio_services_reqs";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["serviceRequested","residentName","emailId","apartmentNumber","status"];
}
