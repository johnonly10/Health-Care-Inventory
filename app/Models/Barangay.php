<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Barangay extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'city_id',
        'name',
        'code',
        'slug',
    ];

    public function city()
    {
        $this->belongsTo(City::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function getSlugOption(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsto('slug');
    }
}
