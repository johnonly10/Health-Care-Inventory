<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Item extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'category_id',
        'supplier_id',
        'item_type_id',
        'storage_condition_id',
        'name',
        'slug',
        'description',
        'unit_price',
        'reorder_level',
        'unit_of_measure',
        'expiry_date',
        'requires_prescription',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }
    public function storageCondition()
    {
        return $this->belongsTo(StorageCondition::class);
    }

    public function stockLevel()
    {
        return $this->hasOne(StockLevel::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function issuedItems()
    {
        return $this->hasMany(IssuedItem::class);
    }

    public function purchaseOrderItems()
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    public function getSlugOption(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
