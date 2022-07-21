<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;
    protected $table = 'Founder';
    protected $fillable = ['user_id', 'name', 'photos',];

    public function setPhotosAttribute($value)
    {
        $this->attributes['photos'] = json_encode($value);
    }

    public function getPhotosAttribute($value)
    {
        return $this->attributes['photos'] = json_decode($value);
    }

}
