<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenEvents extends Model
{
    use HasFactory;
    protected $table="garden_events";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["gardenEvents","eventId","matchDate","time","status"];
}
