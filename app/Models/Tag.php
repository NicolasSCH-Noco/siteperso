<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Tutoriel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['label', 'color', 'icon'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function tutoriels()
    {
        return $this->hasMany(Tutoriel::class);
    }

    public function getCountArticles()
    {
        return $this->articles()->count();
    }

    public function getCountTutoriels()
    {
        return $this->tutoriels()->count();
    }
}
