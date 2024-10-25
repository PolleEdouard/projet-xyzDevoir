<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    /* relation entre catégorie et tracks*/
    public function tracks()
    {
        return $this->belongsToMany(Track::class, 'category_track')->using(CategoryTrack::class);
    }
}
