<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoKepribadian extends Model
{
    use HasFactory;

    protected $table = 'video_kepribadian';

    protected $fillable = [
        'name', 
        'kepribadian', 
        'pertanyaan', 
        'deskripsi'
    ];
}
