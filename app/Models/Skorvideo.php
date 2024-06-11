<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skorvideo extends Model
{
    use HasFactory;

    protected $table = 'skorvideo';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'skorVideo',
        'updated_at',
        'created_at',
    ];
}
