<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatDatabase extends Model
{
    use HasFactory;
    protected $table="chat_databases";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["senderName","receiverName","message",];
}
