<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianBeo;
use App\Models\Survey;
use Illuminate\Support\Facades\Log;

class CognitiveReportController extends Controller
{
    // Show the form to input report ID
    public function index()
    {
        return view('cognitive_report_form');
    }

    // Fetch and display the report based on the provided id_penilaian
    public function show(Request $request)
    {
        $id = $request->input('id_penilaian');

        try {
            Log::info('Fetching penilaianBeo record with id_penilaian: ' . $id);

            // Fetch penilaianBeo record by id_penilaian
            $penilaianBeo = PenilaianBeo::where('id_penilaian', $id)->firstOrFail();
            Log::info('Fetched penilaianBeo record:', $penilaianBeo->toArray());

            // Fetch the corresponding survey record using survey_id
            $survey = Survey::findOrFail($penilaianBeo->survey_id);
            Log::info('Fetched survey record:', $survey->toArray());

            // Decode JSON fields
            $surveyJsCognitiveJson = json_decode($survey->json, true);
            $responseCognitiveJson = json_decode($penilaianBeo->response_cognitive_json, true);
            $kunciJawaban = json_decode($survey->kunci_jawaban, true);

            return view('cognitive_report', compact('penilaianBeo', 'surveyJsCognitiveJson', 'responseCognitiveJson', 'kunciJawaban'));
        } catch (\Exception $e) {
            Log::error('Error fetching report data: ' . $e->getMessage());
            return redirect()->back()->withErrors(['msg' => 'Report not found or an error occurred.']);
        }
    }
}
