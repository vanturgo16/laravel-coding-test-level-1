<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id','name','slug','startAt','endAt'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'id' => 'string'
    ];
}
