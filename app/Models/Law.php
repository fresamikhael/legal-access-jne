<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'law';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['title'] ?? false, function($query, $title) {
            return $query->where('title', 'like', '%'.$title.'%');
        });

        $query->when($filters['body'] ?? false, function($query, $body) {
            return $query->where('body', 'like', '%'.$body.'%');
        });
    }
}
