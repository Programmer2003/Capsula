<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }

    public function getAllReviews($sort = 'desc')
    {
        $reviews = Review::where('product_id', $this->id)
            ->orderBy('created_at', $sort)
            ->get();
        return $reviews;
    }

    public function reviewsCount(){
        return Review::where('product_id', $this->id)->count();
    }

    public function averageRating($round= null)
    {
        $rating = Review::where('product_id', $this->id)->avg('rating');
        if ($round) {
            $rating = round($rating,$round);
        }

        return $rating;
    }
}
