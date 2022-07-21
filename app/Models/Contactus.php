<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;

    protected $table = 'Contactus';
    protected $fillable = ['user_id','name','email','message','paymentId',];
    protected $hidden = ['created_at','updated_at'];


}
