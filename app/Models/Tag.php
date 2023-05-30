<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function articles(){
        return $this->belongsToMany(Article::class);
    }
}
