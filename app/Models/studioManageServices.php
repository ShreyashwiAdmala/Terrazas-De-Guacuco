<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studioManageServices extends Model
{
    use HasFactory;
    protected $table="studio_manage_services";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["serviceType","serviceHandlerName","emailId",];
}
