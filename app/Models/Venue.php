<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_name',
        'venue_description',
        'venue_details',
        'venue_capacity',
        'venue_category_id',
        'guest_price',
        'member_price',
        'venue_notes',
        'cover_photo',
        'slider_images',
    ];

    // In Venue.php
public function categories()
{
    return $this->belongsTo(Categories::class, 'venue_category_id');
}

}
