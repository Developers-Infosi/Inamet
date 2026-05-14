<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory,SoftDeletes;

    protected $table="publications";
    protected $guarded = ["id"];



    protected $casts = [
        'published_at' => 'datetime'
    ];

    protected $dates= ["deleted_at"];

}
