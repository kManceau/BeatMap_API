<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'photo',
        'style_id'
    ];
    public $timestamps = false;

    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
