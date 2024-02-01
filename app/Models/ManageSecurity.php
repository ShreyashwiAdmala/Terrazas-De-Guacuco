<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageSecurity extends Model
{
    use HasFactory;
    protected $table="manage_securities";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","age","location"];
}
