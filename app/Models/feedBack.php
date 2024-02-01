<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedBack extends Model
{
    use HasFactory;
    protected $table="feed_backs";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["answer1","answer2","answer3","answer4"];
}
