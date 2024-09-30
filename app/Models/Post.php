<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Post extends Model
{

    use HasFactory, Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'image',
        'body',
        'category_id',
    ];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function scopeFilter(Builder $query, array $filters): void
    // {
    //     $query->when(
    //         $filters['search'] ?? false,
    //         fn($query, $search) =>
    //         $query->where('title', 'like', '%' . $search . '%')
    //     );

    //     $query->when(
    //         $filters['category'] ?? false,
    //         fn($query, $category) =>
    //         $query->whereHas('category', fn($query) => $query->where('slug', $category))
    //     );

    //     $query->when(
    //         $filters['author'] ?? false,
    //         fn($query, $author) =>
    //         $query->whereHas('author', fn($query) => $query->where('username', $author))
    //     );
    // }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/post/' . $image),
        );
    }
}
