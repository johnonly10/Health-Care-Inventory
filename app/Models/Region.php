<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Region extends Model
{
    use HasFactory, HasSlug;

    protected $fillable =
    [
        'name',
        'code',
        'slug',
    ];


    public function provinces()
    {
        $this->hasMany(Province::class);
    }

    public function user()
    {
        $this->hasMany(User::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
