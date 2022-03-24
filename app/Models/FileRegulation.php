<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class FileRegulation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $table = 'file_regulations';

    public function regulation()
    {
        return $this->belongsTo(Regulation::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'file_regulations', 'length' => 5, 'prefix' => 'FRG', 'reset_on_prefix_change'=>true]);
        });
    }

}
