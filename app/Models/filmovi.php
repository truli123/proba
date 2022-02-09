<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filmovi extends Model
{
    use HasFactory;
    public function ime()
    {
        return $this->belongsTo('App\Models\zanr', 'id');
    }
}
