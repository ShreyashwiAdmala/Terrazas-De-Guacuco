<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AptStaffList extends Model
{
    use HasFactory;
    protected $table="apt_staff_lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","emailId","aptType",];
}
