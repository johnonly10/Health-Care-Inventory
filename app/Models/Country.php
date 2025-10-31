<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Country extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'code',
        'slug',
    ];

    public function regions()
    {
        $this->hasMany(Region::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveslugsto('slug');
    }
}
