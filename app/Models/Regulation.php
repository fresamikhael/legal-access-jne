<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $table = 'regulations';

    public function files()
    {
        return $this->hasMany(FileRegulation::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['name'] ?? false, function($query, $name) {
            return $query->where('name', 'like', '%'.$name.'%');
        });

        $query->when($filters['number'] ?? false, function($query, $number) {
            return $query->where('number', 'like', '%'.$number.'%');
        });

        $query->when($filters['year'] ?? false, function($query, $year) {
            return $query->where('year', 'like', '%'.$year.'%');
        });

        $query->when($filters['title'] ?? false, function($query, $title) {
            return $query->where('title', 'like', '%'.$title.'%');
        });
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'regulations', 'length' => 6, 'prefix' => 'RG', 'reset_on_prefix_change'=>true]);
        });
    }
}
