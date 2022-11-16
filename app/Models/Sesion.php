<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sesion extends Model
{
    use HasFactory;

    protected $table = 'sesions';

    protected $fillable = [
        'title',
        'description',
        'code',
        'user_id'
    ];

    public function invitations() {
        return $this->hasMany(Invitation::class, 'sesion_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function collaborators() {
        return $this->hasMany(Collaborator::class, 'sesion_id');
    }

    /*public function getUrlAttribute(): string {
        return route('sesiones.show', ['slug' => $this->slug]);
    }

    public function getSlugAttribute(): string {
        return Str::slug($this->title, '-') . $this->code;
    }
    */

    /*public function users() {
        return $this->belongsToMany(User::class, 'user_id');
    }*/
}
