<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Regency extends Model
{

    use HasFactory;

    protected $fillable = [
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
    public function province(){
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    public function districts(){
        return $this->hasMany(District::class, 'regency_code', 'code');
    }
}
