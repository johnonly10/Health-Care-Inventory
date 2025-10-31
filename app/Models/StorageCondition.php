<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageCondition extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'is_active',
        'description',
        'code',
        'name',
    ];

    public function items()
    {
        $this->hasMany(Item::class);
    }
}
