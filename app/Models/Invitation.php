<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $table = 'invitations';

    protected $fillable = [
        'estado',
        'sesion_id',
        'collaborator_id',
    ];

    public function sesion() {
        return $this->belongsTo(Sesion::class, 'sesion_id');
    }

    public function collaborators() {
        return $this->belongsTo(Collaborator::class, 'collaborator_id');
    }
}
