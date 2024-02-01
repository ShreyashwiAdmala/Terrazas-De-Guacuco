<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class residentSubcriptions extends Model
{
    use HasFactory;
    protected $table="resident_subcriptions";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","poolSubcription","gardenSubcription","tennisSubcription"];
}
