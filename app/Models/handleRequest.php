<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class handleRequest extends Model
{
    use HasFactory;
    protected $table="handle_requests";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","incidentType","phnumber","query"];
}
