<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'category_id',
    ];

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) // Post::newquery->filter() {
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
                ->where('title', 'like', "%{$search}%")
                ->orWhere('body', 'like', "%{$search}%"));

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query
                ->whereExists(fn($query) =>
                    $query
                        ->from('categories')
                        ->whereColumn('categories.id', 'posts.category_id')
                        ->where('categories.slug', $category)));
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
