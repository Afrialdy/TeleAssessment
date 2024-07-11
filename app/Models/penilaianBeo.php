<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaianBeo extends Model
{
    use HasFactory;

    protected $table = 'penilaianbeo';

    protected $primaryKey = 'id_penilaian'; // Specify the correct primary key

    protected $fillable = [
        'id_user',
        'survey_id',
        'f_sentimen_positif',
        'f_sentimen_netral',
        'f_sentimen_negatif',
        'v_sentimen',
        'skor_validasi',
        'kepercayaan',
        'response_cognitive_json',
        'surveyjs_cognitive_json',
        'score_cognitive',
        'skor_validasi_kepribadianbakatminat',
        'skor_validasi_cognitif',
    ];

    protected $dates = [
        'tanggal_penilaian', // Add this line to handle date casting
    ];
}
