<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "categories";

    protected $fillable = [
        'img',
        'name',
        'description',
        'priority',
        'status',
        'slug'

    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name'],
                'onUpdate' => true
            ]
        ];
    }
}


