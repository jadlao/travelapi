<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Travel extends Model
{
    use HasFactory, HasUuids, Sluggable;

    protected $table = 'travels';
 
    protected $fillable = [
        'is_public',
        'slug',
        'name',
        'description',
        'number_of_days',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    // New syntax
    // public function numberOfNights(): Attribute
    // {
    //     // return Attribute::make(
    //     //     get: fn ($value, $attributes) => $attributes['number_of_days'] - 1
    //     // );
    // }

    public function getNumberOfNightsAttribute()
    {
        return $this->number_of_days - 1;
    }

    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class);
    }
}
