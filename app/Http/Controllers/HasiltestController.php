<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PenilaianBeo;
use App\Models\Survey;
use Illuminate\Http\Request;

class HasiltestController extends Controller
{
    public function hasilTest($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('assessment')->with('error', 'User not found');
        }

        // Assuming PenilaianBeo is related to the user, fetch it accordingly
        $penilaianBeo = PenilaianBeo::where('id_user', $user->id)->first();

        // Check if $penilaianBeo exists
        if (!$penilaianBeo) {
            return redirect()->route('assessment')->with('error', 'Assessment data not found');
        }

        // Fetch the survey data based on the survey_id in PenilaianBeo
        $survey = Survey::find($penilaianBeo->survey_id);

        if (!$survey) {
            return redirect()->route('assessment')->with('error', 'Survey not found');
        }

        // Decode survey data (assuming it's stored as JSON)
        $surveyJsCognitiveJson = json_decode($survey->json, true);
        $kunciJawaban = json_decode($survey->kunci_jawaban, true);

        // Pass all required variables to the view
        return view('hasil-test', [
            'user' => $user,
            'penilaianBeo' => $penilaianBeo,
            'surveyJsCognitiveJson' => $surveyJsCognitiveJson,
            'kunciJawaban' => $kunciJawaban,
            'responseCognitiveJson' => json_decode($penilaianBeo->response_cognitive_json, true) // Assuming this is stored in JSON format
        ]);
    }
}

