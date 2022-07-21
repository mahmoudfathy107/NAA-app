<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactusserv extends Model
{
    use HasFactory;
    protected $table = 'Contactusserv';
    protected $fillable = ['user_id','name','email','message','workWithUs','getLegalAdvice','advirtiseWithUs','publishWithUs','takePicture','Donate','WatchEpisodes','butAbook','translate','other','paymentId',];
    protected $hidden = ['created_at','updated_at'];

    protected $casts = [
        'workWithUs' => 'boolean',
        'getLegalAdvice' => 'boolean',
        'advirtiseWithUs' => 'boolean',
        'publishWithUs' => 'boolean',
        'takePicture' => 'boolean',
        'Donate' => 'boolean',
        'WatchEpisodes' => 'boolean',
        'butAbook' => 'boolean',
        'translate' => 'boolean',
        'other' => 'boolean',
    ];
}
