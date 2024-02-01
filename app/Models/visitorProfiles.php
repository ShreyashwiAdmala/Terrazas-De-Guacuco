<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitorProfiles extends Model
{
    use HasFactory;
    protected $table="visitor_profiles";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","phnumber","dlnumber","carnumplate"];
}
