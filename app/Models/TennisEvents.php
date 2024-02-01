<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TennisEvents extends Model
{
    use HasFactory;
    protected $table="tennis_events";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["tennisEvents","eventId","matchDate","time","status"];
}
