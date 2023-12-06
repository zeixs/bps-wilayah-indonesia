<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_code',
        'code',
        'name'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Str::title($value),
        );
    }
    
    public $timestamps = false;
    public function regency(){
        return $this->belongsTo(Regency::class, 'regency_id', 'id');
    }
}
