<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentHistory extends Model
{
    use HasFactory;
    protected $table="payment_histories";
    public $timestamps=false;
    public $id = false;
    protected $fillable=["paymentId","amountPaid","paymentDate"];
}
