<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'boards';

    protected $fillable = [
        'sesion_id',
    ];

    public function sesion() {
        return $this->belongsTo(Sesion::class, 'sesion_id');
    }
}
