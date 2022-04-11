<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'taille',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
