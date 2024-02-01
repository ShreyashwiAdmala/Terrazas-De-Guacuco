<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolStaffList extends Model
{
    use HasFactory;
    protected $table="pool_staff_lists";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["name","email","workerType","poolName","schedule"];
}
