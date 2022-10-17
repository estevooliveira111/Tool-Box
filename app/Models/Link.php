<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = 'links';
    protected $keyType = 'string';
    protected $primaryKey = 'link';

    protected $fillable = [
        'link',
        'full_link',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($link) {
            $link->link = substr(uniqid($link->id), ($link->id * 00.010));
        });
    }

}
