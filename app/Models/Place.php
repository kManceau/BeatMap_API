<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'address',
        'city',
        'state',
        'country',
        'zip',
        'latitude',
        'longitude',
        'photo',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
