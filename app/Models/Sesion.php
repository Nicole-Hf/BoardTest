<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;

    protected $table = 'sesions';

    protected $fillable = [
        'title',
        'code',
        'user_id'
    ];

    public function invitations() {
        return $this->hasMany(Invitation::class, 'sesion_id');
    }

    public function board() {
        return $this->hasOne(Board::class, 'sesion_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
