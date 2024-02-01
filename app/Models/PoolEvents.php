<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolEvents extends Model
{
    use HasFactory;
    protected $table="pool_events";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["poolEvents","eventId","matchDate","time","status"];
}