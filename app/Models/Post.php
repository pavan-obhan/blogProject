<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Post extends Model
{
    use HasFactory;

    // it has access to method Post::factory()
    protected $with = ['author', 'category'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query
            ->where(fn($query)=>$query //used closure to group together
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')));

        $query->when($filters['category'] ?? false, fn($query, $category) => $query
            ->whereHas('category', fn($q)=>$q
            ->where('slug',$category)));

//            ->whereExists(fn($query)=>
//            $query->from('categories')
//            ->whereColumn('categories.id','posts.category_id')
//            ->where('categories.slug',$category)));
        $query->when($filters['author'] ?? false, fn($query,$author)=>
        $query->whereHas('author',fn($q)=>
        $q->where('username',$author)));
    }
}
